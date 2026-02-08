<?php

namespace App\Controller\Back;

use App\Entity\Matiere;
use App\Form\MatiereType;
use App\Repository\MatiereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin/matiere')]
class MatiereController extends AbstractController
{
    #[Route('/', name: 'app_back_matiere_index', methods: ['GET'])]
    public function index(Request $request, MatiereRepository $matiereRepository, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $queryBuilder = $matiereRepository->createQueryBuilder('m');

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            6
        );

        $matieres = $matiereRepository->findAll();

        // Distribution des sections pour le graphique circulaire
        $sections = $matiereRepository->getSectionDistribution();

        // Distribution des niveaux pour le deuxième graphique
        $niveaux = $matiereRepository->getNiveauDistribution();

        return $this->render('back/matiere/index.html.twig', [
            'pagination' => $pagination,
            'matieres' => $matieres,
            'section_labels' => array_keys($sections),
            'section_data' => array_values($sections),
            'niveau_labels' => array_keys($niveaux),
            'niveau_data' => array_values($niveaux),
        ]);
    }

    #[Route('/new', name: 'app_back_matiere_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $matiere = new Matiere();
        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception
                }

                $matiere->setImage($newFilename);
            }

            $entityManager->persist($matiere);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_matiere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/matiere/new.html.twig', [
            'matiere' => $matiere,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_back_matiere_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Matiere $matiere, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception
                }

                $matiere->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_back_matiere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/matiere/edit.html.twig', [
            'matiere' => $matiere,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_back_matiere_delete', methods: ['POST'])]
    public function delete(Request $request, Matiere $matiere, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $matiere->getId(), $request->request->get('_token'))) {
            $entityManager->remove($matiere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_matiere_index', [], Response::HTTP_SEE_OTHER);
    }
}
