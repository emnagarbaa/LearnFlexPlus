<?php

namespace App\Controller;

use App\Entity\Communication;
use App\Form\CommunicationSearchType;
use App\Repository\CommunicationRepository;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back/communication')]
class CommunicationController extends AbstractController
{
    #[Route('/', name: 'back_communication_index')]
    public function index(
        CommunicationRepository $repo, 
        Request $request,
        PaginatorInterface $paginator
    ): Response
    {
        // Créer le formulaire de recherche
        $form = $this->createForm(CommunicationSearchType::class);
        $form->handleRequest($request);
        
        $criteria = [];
        
        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $criteria = $form->getData();
        }
        
        // Récupérer les communications avec les critères de recherche
        $query = $repo->search($criteria);
        
        // Pagination
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Items par page
        );
        
        return $this->render('back/communication/index.html.twig', [
            'communications' => $pagination,
            'searchForm' => $form->createView(),
            'searchCriteria' => $criteria
        ]);
    }

    #[Route('/new', name: 'back_communication_new')]
    public function new(Request $request, EntityManagerInterface $em, PublicationRepository $publicationRepo): Response
    {
        if ($request->isMethod('POST')) {
            // VÉRIFICATION CSRF
            if (!$this->isCsrfTokenValid('communication_new', $request->request->get('_token'))) {
                $this->addFlash('error', 'Token CSRF invalide.');
                return $this->redirectToRoute('back_communication_new');
            }
            
            $communication = new Communication();
            $communication->setType($request->request->get('type'));
            $communication->setLien($request->request->get('lien'));
            
            // Convertir la date
            $dateHeure = $request->request->get('dateHeure');
            if ($dateHeure) {
                $communication->setDateHeure(new \DateTime($dateHeure));
            }
            
            // Convertir la durée en int
            $duree = $request->request->get('duree');
            if ($duree !== null && $duree !== '') {
                $communication->setDuree((int)$duree);
            } else {
                $communication->setDuree(null);
            }
            
            $communication->setEtat($request->request->get('etat'));
            $communication->setDescriptionDetaillee($request->request->get('descriptionDetaillee'));

            // Gérer la publication
            $publicationId = $request->request->get('publication');
            if ($publicationId) {
                $publication = $publicationRepo->find($publicationId);
                if ($publication) {
                    $communication->setPublication($publication);
                } else {
                    $this->addFlash('warning', 'Publication non trouvée, communication créée sans publication.');
                }
            }

            $em->persist($communication);
            $em->flush();

            $this->addFlash('success', 'Communication créée avec succès.');

            return $this->redirectToRoute('back_communication_index');
        }

        $publications = $publicationRepo->findAll();

        return $this->render('back/communication/new.html.twig', [
            'publications' => $publications
        ]);
    }

    #[Route('/edit/{id}', name: 'back_communication_edit')]
    public function edit($id, Request $request, CommunicationRepository $repo, EntityManagerInterface $em, PublicationRepository $publicationRepo): Response
    {
        $communication = $repo->find($id);

        if (!$communication) {
            throw $this->createNotFoundException('Communication non trouvée');
        }

        if ($request->isMethod('POST')) {
            // VÉRIFICATION CSRF
            if (!$this->isCsrfTokenValid('communication_edit_' . $id, $request->request->get('_token'))) {
                $this->addFlash('error', 'Token CSRF invalide.');
                return $this->redirectToRoute('back_communication_edit', ['id' => $id]);
            }
            
            $communication->setType($request->request->get('type'));
            $communication->setLien($request->request->get('lien'));
            
            // Convertir la date
            $dateHeure = $request->request->get('dateHeure');
            if ($dateHeure) {
                $communication->setDateHeure(new \DateTime($dateHeure));
            }
            
            // Convertir la durée en int
            $duree = $request->request->get('duree');
            if ($duree !== null && $duree !== '') {
                $communication->setDuree((int)$duree);
            } else {
                $communication->setDuree(null);
            }
            
            $communication->setEtat($request->request->get('etat'));
            $communication->setDescriptionDetaillee($request->request->get('descriptionDetaillee'));

            // Gérer la publication
            $publicationId = $request->request->get('publication');
            if ($publicationId) {
                $publication = $publicationRepo->find($publicationId);
                if ($publication) {
                    $communication->setPublication($publication);
                } else {
                    $this->addFlash('warning', 'Publication non trouvée.');
                }
            } else {
                // Si aucune publication n'est sélectionnée, on supprime la relation
                $communication->setPublication(null);
            }

            $em->flush();

            $this->addFlash('success', 'Communication modifiée avec succès.');

            return $this->redirectToRoute('back_communication_index');
        }

        $publications = $publicationRepo->findAll();

        return $this->render('back/communication/edit.html.twig', [
            'communication' => $communication,
            'publications' => $publications
        ]);
    }

    #[Route('/show/{id}', name: 'back_communication_show')]
    public function show($id, CommunicationRepository $repo): Response
    {
        $communication = $repo->find($id);

        if (!$communication) {
            throw $this->createNotFoundException('Communication non trouvée');
        }

        return $this->render('back/communication/show.html.twig', [
            'communication' => $communication
        ]);
    }

    #[Route('/delete/{id}', name: 'back_communication_delete', methods: ['POST'])]
    public function delete($id, Request $request, CommunicationRepository $repo, EntityManagerInterface $em): Response
    {
        $communication = $repo->find($id);

        if (!$communication) {
            throw $this->createNotFoundException('Communication non trouvée');
        }

        // Protection CSRF
        if ($this->isCsrfTokenValid('delete'.$communication->getId(), $request->request->get('_token'))) {
            $em->remove($communication);
            $em->flush();
            
            $this->addFlash('success', 'Communication supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('back_communication_index');
    }
    
    #[Route('/search/advanced', name: 'back_communication_search_advanced')]
    public function searchAdvanced(Request $request, CommunicationRepository $repo): Response
    {
        // Formulaire de recherche avancée
        $form = $this->createForm(CommunicationSearchType::class);
        $form->handleRequest($request);
        
        $results = [];
        
        if ($form->isSubmitted() && $form->isValid()) {
            $criteria = $form->getData();
            $results = $repo->search($criteria)->getResult();
        }
        
        return $this->render('back/communication/search_advanced.html.twig', [
            'form' => $form->createView(),
            'results' => $results,
        ]);
    }
    
    #[Route('/export/pdf', name: 'back_communication_export_pdf')]
    public function exportPdf(CommunicationRepository $repo): Response
    {
        $communications = $repo->findAll();
        
        return $this->render('back/communication/export_pdf.html.twig', [
            'communications' => $communications,
        ]);
    }
    
    #[Route('/statistics', name: 'back_communication_statistics')]
public function statistics(CommunicationRepository $repo): Response
{
    $stats = $repo->getStatistics();
    
    return $this->render('back/communication/statistics.html.twig', [
        'total' => $stats['total'],
        'liveCount' => $stats['live'],
        'recordCount' => $stats['record'],
        'tauxLive' => $stats['taux_live'],
        'programmeeCount' => $stats['programmee'],
        'enCoursCount' => $stats['en_cours'],
        'termineeCount' => $stats['terminee'],
        'annuleeCount' => $stats['annulee'],
        'repartition' => $stats['repartition'],
    ]);
}
}