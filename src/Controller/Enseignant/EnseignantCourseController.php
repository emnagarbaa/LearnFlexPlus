<?php

namespace App\Controller\Enseignant;

use App\Entity\Cours;
use App\Entity\Matiere;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use App\Repository\MatiereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/enseignant')]
class EnseignantCourseController extends AbstractController
{
        #[Route('/matiere', name: 'app_enseignant_matiere_index', methods: ['GET'])]
    public function index(MatiereRepository $matiereRepository): Response
    {
        return $this->render('enseignant/matiere/index.html.twig', [
            'matieres' => $matiereRepository->findAll(),
        ]);
    }

    #[Route('/matiere/{id}/cours', name: 'app_enseignant_cours_manage', methods: ['GET', 'POST'])]
    public function manageCours(Matiere $matiere, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $newCours = new Cours();
        $newCours->setMatiere($matiere);
        $form = $this->createForm(CoursType::class, $newCours, [
            'action' => $this->generateUrl('app_enseignant_cours_new', ['id' => $matiere->getId()]),
        ]);

        return $this->render('enseignant/cours/manage.html.twig', [
            'matiere' => $matiere,
            'cours_list' => $matiere->getCours(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/matiere/{id}/cours/new', name: 'app_enseignant_cours_new', methods: ['POST'])]
    public function newCours(Matiere $matiere, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $cours = new Cours();
        $cours->setMatiere($matiere);
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($this->getParameter('images_directory'), $newFilename);
                    $cours->setImage($newFilename);
                } catch (FileException $e) {
                }
            }

            // Handle PDF file upload
            $pdfFile = $form->get('pdf_file')->getData();
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.pdf';
                try {
                    $pdfFile->move($this->getParameter('images_directory'), $newFilename);
                    $cours->setPdfFile($newFilename);
                } catch (FileException $e) {
                }
            }

            $entityManager->persist($cours);
            $entityManager->flush();
            return $this->redirectToRoute('app_enseignant_cours_manage', ['id' => $matiere->getId()]);
        }

        return $this->render('enseignant/cours/manage.html.twig', [
            'matiere' => $matiere,
            'cours_list' => $matiere->getCours(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/cours/{id}/edit', name: 'app_enseignant_cours_edit', methods: ['POST'])]
    public function editCours(Cours $cours, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($this->getParameter('images_directory'), $newFilename);
                    $cours->setImage($newFilename);
                } catch (FileException $e) {
                }
            }

            // Handle PDF file upload
            $pdfFile = $form->get('pdf_file')->getData();
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.pdf';
                try {
                    $pdfFile->move($this->getParameter('images_directory'), $newFilename);
                    $cours->setPdfFile($newFilename);
                } catch (FileException $e) {
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Cours modifié avec succès!');
            return $this->redirectToRoute('app_enseignant_cours_manage', ['id' => $cours->getMatiere()->getId()]);
        }

        $matiere = $cours->getMatiere();
        return $this->render('enseignant/cours/manage.html.twig', [
            'matiere' => $matiere,
            'cours_list' => $matiere ? $matiere->getCours() : [],
            'form' => $form->createView(),
            'edit_cours' => $cours,
            'edit_form_valid' => false,
        ]);
    }

    #[Route('/cours/{id}/delete', name: 'app_enseignant_cours_delete', methods: ['POST'])]
    public function deleteCours(Cours $cours, Request $request, EntityManagerInterface $entityManager): Response
    {
        $matiereId = $cours->getMatiere()->getId();
        if ($this->isCsrfTokenValid('delete' . $cours->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cours);
            $entityManager->flush();
            $this->addFlash('success', 'Cours supprimé!');
        }

        return $this->redirectToRoute('app_enseignant_cours_manage', ['id' => $matiereId]);
    }
}
