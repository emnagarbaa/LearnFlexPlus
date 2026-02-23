<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Form\PublicationType;
use App\Repository\PublicationRepository;
use App\Service\ContentModerationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/back/publication')]
class BackPublicationController extends AbstractController
{
    private ContentModerationService $moderationService;

    public function __construct(ContentModerationService $moderationService)
    {
        $this->moderationService = $moderationService;
    }

    // 1. AFFICHER LA LISTE (INDEX) avec recherche et tri
    #[Route('/', name: 'back_publication_index', methods: ['GET'])]
    public function index(Request $request, PublicationRepository $repository): Response
    {
        // Récupérer les paramètres de recherche
        $id = $request->query->get('id');
        $titre = $request->query->get('titre');
        $categorie = $request->query->get('categorie');
        $dateDebut = $request->query->get('dateDebut') 
            ? new \DateTime($request->query->get('dateDebut')) 
            : null;
        $dateFin = $request->query->get('dateFin') 
            ? new \DateTime($request->query->get('dateFin')) 
            : null;
        
        // Paramètres de tri
        $sortBy = $request->query->get('sortBy', 'dateCreation');
        $sortOrder = $request->query->get('sortOrder', 'DESC');

        // Effectuer la recherche avec tri
        $publications = $repository->search($id, $titre, $categorie, $dateDebut, $dateFin, $sortBy, $sortOrder);

        return $this->render('back/publication/index.html.twig', [
            'publications' => $publications,
            'searchParams' => [
                'id' => $id,
                'titre' => $titre,
                'categorie' => $categorie,
                'dateDebut' => $request->query->get('dateDebut'),
                'dateFin' => $request->query->get('dateFin'),
                'sortBy' => $sortBy,
                'sortOrder' => $sortOrder,
            ]
        ]);
    }

    // 2. AFFICHER UNE PUBLICATION (SHOW)
    #[Route('/{id}', name: 'back_publication_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Publication $publication): Response
    {
        return $this->render('back/publication/show.html.twig', [
            'publication' => $publication,
        ]);
    }

    // 3. AJOUTER UNE PUBLICATION (NEW) - ✅ AVEC MODÉRATION
    #[Route('/new', name: 'back_publication_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // ✅ VÉRIFICATION DES MOTS INAPPROPRIÉS
            $titre = $publication->getTitre();
            $description = $publication->getDescription();
            
            $checkTitre = $this->moderationService->checkContent($titre);
            $checkDescription = $this->moderationService->checkContent($description);
            
            if (!$checkTitre['isClean'] || !$checkDescription['isClean']) {
                $badWords = array_merge($checkTitre['foundWords'], $checkDescription['foundWords']);
                
                $this->addFlash('error', 
                    '⚠️ Votre publication contient des mots inappropriés : ' . 
                    implode(', ', array_unique($badWords)) . 
                    '. Veuillez modifier votre texte.'
                );
                
                return $this->render('back/publication/new.html.twig', [
                    'form' => $form->createView()
                ]);
            }
            
            // Si tout est OK, on persiste
            $publication->setDateCreation(new \DateTime());
            $publication->setNombreLikes(0);
            $publication->setNombreVues(0);
            
            $em->persist($publication);
            $em->flush();

            $this->addFlash('success', 'Publication créée avec succès !');
            return $this->redirectToRoute('back_publication_index');
        }

        return $this->render('back/publication/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // 4. MODIFIER UNE PUBLICATION (EDIT) - ✅ AVEC MODÉRATION
    #[Route('/{id}/edit', name: 'back_publication_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Publication $publication, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // ✅ VÉRIFICATION DES MOTS INAPPROPRIÉS
            $titre = $publication->getTitre();
            $description = $publication->getDescription();
            
            $checkTitre = $this->moderationService->checkContent($titre);
            $checkDescription = $this->moderationService->checkContent($description);
            
            if (!$checkTitre['isClean'] || !$checkDescription['isClean']) {
                $badWords = array_merge($checkTitre['foundWords'], $checkDescription['foundWords']);
                
                $this->addFlash('error', 
                    '⚠️ Votre publication contient des mots inappropriés : ' . 
                    implode(', ', array_unique($badWords)) . 
                    '. Veuillez modifier votre texte.'
                );
                
                return $this->render('back/publication/edit.html.twig', [
                    'publication' => $publication,
                    'form' => $form->createView()
                ]);
            }
            
            $em->flush();

            $this->addFlash('success', 'Publication modifiée avec succès !');
            return $this->redirectToRoute('back_publication_index');
        }

        return $this->render('back/publication/edit.html.twig', [
            'form' => $form->createView(),
            'publication' => $publication,
        ]);
    }

    // 5. SUPPRIMER UNE PUBLICATION (DELETE)
    #[Route('/{id}/delete', name: 'back_publication_delete', methods: ['POST'])]
    public function delete(Request $request, Publication $publication, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            $em->remove($publication);
            $em->flush();

            $this->addFlash('success', 'Publication supprimée avec succès !');
        }

        return $this->redirectToRoute('back_publication_index');
    }

    // 6. STATISTIQUES
    #[Route('/stats', name: 'back_publication_stats', methods: ['GET'])]
    public function statistics(PublicationRepository $repository): Response
    {
        $stats = $repository->getStatistics();
        $statsByCategory = $repository->getStatisticsByCategory();
        $topVues = $repository->getTopPublications('vues', 10);
        $topLikes = $repository->getTopPublications('likes', 10);

        return $this->render('back/publication/statistics.html.twig', [
            'stats' => $stats,
            'statsByCategory' => $statsByCategory,
            'topVues' => $topVues,
            'topLikes' => $topLikes,
        ]);
    }

    // 7. EXPORTATION PDF
    #[Route('/export/pdf', name: 'back_publication_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, PublicationRepository $repository): Response
    {
        // Récupérer les mêmes filtres que l'index
        $idParam = $request->query->get('id');
        $id = null;
        
        // Convertir en int si c'est numérique
        if ($idParam && is_numeric($idParam)) {
            $id = (int)$idParam;
        }
        
        $titre = $request->query->get('titre');
        $categorie = $request->query->get('categorie');
        $dateDebut = $request->query->get('dateDebut') 
            ? new \DateTime($request->query->get('dateDebut')) 
            : null;
        $dateFin = $request->query->get('dateFin') 
            ? new \DateTime($request->query->get('dateFin')) 
            : null;
        $sortBy = $request->query->get('sortBy', 'dateCreation');
        $sortOrder = $request->query->get('sortOrder', 'DESC');

        // Récupérer les publications avec les mêmes critères
        $publications = $repository->search($id, $titre, $categorie, $dateDebut, $dateFin, $sortBy, $sortOrder);

        // Générer le HTML pour le PDF
        $html = $this->renderView('back/publication/pdf.html.twig', [
            'publications' => $publications,
            'dateExport' => new \DateTime(),
        ]);

        // Configuration de Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        // Retourner le PDF
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="publications_' . date('Y-m-d_H-i-s') . '.pdf"',
        ]);
    }
}