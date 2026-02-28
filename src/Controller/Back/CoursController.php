<?php

namespace App\Controller\Back;

use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/admin/cours')]
class CoursController extends AbstractController
{
    #[Route('/', name: 'app_back_cours_index', methods: ['GET'])]
    public function index(Request $request, CoursRepository $coursRepository, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $queryBuilder = $coursRepository->createQueryBuilder('c');
        //pagination
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            4
        );
        ///alll cours
        $allCours = $coursRepository->findAll();

        // Calcul du volume horaire par matière pour le graphique à barres
        $avgScoresData = $coursRepository->getVolumeHorairePerMatiere();

        // Calcul du volume horaire total
        $totalHours = $coursRepository->getTotalDuration();

        // Distribution des langues pour le deuxième graphique
        $langues = $coursRepository->getLangueDistribution();

        return $this->render('back/cours/index.html.twig', [
            'pagination' => $pagination,
            'cours' => $allCours,
            'subject_avg_labels' => array_keys($avgScoresData),
            'subject_avg_data' => array_values($avgScoresData),
            'langue_labels' => array_keys($langues),
            'langue_data' => array_values($langues),
            'total_hours' => $totalHours,
        ]);
    }

    #[Route('/new', name: 'app_back_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
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

                $cour->setImage($newFilename);
            }

            // Handle PDF file upload
            $pdfFile = $form->get('pdf_file')->getData();
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.pdf';
                try {
                    $pdfFile->move($this->getParameter('images_directory'), $newFilename);
                    $cour->setPdfFile($newFilename);
                } catch (FileException $e) {
                    // handle exception
                }
            }

            $entityManager->persist($cour);
            $entityManager->flush();
            /////// hezni lel index
            return $this->redirectToRoute('app_back_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    /*
    #[Route('/{id}/edit', name: 'app_back_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cour, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CoursType::class, $cour);
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

                $cour->setImage($newFilename);
            }

            // Handle PDF file upload
            $pdfFile = $form->get('pdf_file')->getData();
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.pdf';
                try {
                    $pdfFile->move($this->getParameter('images_directory'), $newFilename);
                    $cour->setPdfFile($newFilename);
                } catch (FileException $e) {
                    // handle exception
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_back_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_back_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_back_cours_index', [], Response::HTTP_SEE_OTHER);
    }
    */
}
