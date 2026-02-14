<?php

namespace App\Controller;
use App\Entity\Quiz;  // ← AJOUTEZ CETTE LIGNE
use App\Repository\QuizRepository;  // ← AJOUTEZ AUSSI CELLE-CI si vous utilisez la première méthode
use Symfony\Component\Security\Http\Attribute\IsGranted;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[IsGranted('ROLE_ENSEIGNANT')]
#[Route('/reponse')]
final class ReponseController extends AbstractController
{
    #[Route(name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

   #[Route('/new/{quizId}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
public function new(
    int $quizId,
    Request $request,
    EntityManagerInterface $entityManager,
    QuizRepository $quizRepository,
    ReponseRepository $reponseRepository
): Response
{
    // Récupérer le quiz
    $quiz = $quizRepository->find($quizId);
    if (!$quiz) {
        throw $this->createNotFoundException('Quiz introuvable');
    }

    $reponse = new Reponse();
    $reponse->setQuiz($quiz);

    $form = $this->createForm(ReponseType::class, $reponse);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // 1️⃣ Vérifier le nombre max de réponses (ex: 4)
        if (count($quiz->getReponses()) >= 4) {
            $this->addFlash('error', 'Impossible d’ajouter une réponse : maximum 4 réponses par quiz.');
            return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quizId]);
        }

        // 2️⃣ Vérifier qu'il n'y a qu'une seule réponse correcte
        if ($reponse->isEstCorrecte()) {
            $reponseCorrecteExistante = $reponseRepository->findOneBy([
                'quiz' => $quiz,
                'estCorrecte' => true
            ]);

            if ($reponseCorrecteExistante) {
                $this->addFlash('error', 'Impossible d’ajouter cette réponse : ce quiz a déjà une réponse correcte.');
                return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quizId]);
            }
        }

        // 3️⃣ Tout est OK → persister
        $entityManager->persist($reponse);
        $entityManager->flush();

        $this->addFlash('success', 'Réponse ajoutée avec succès !');
        return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quizId]);
    }

    return $this->render('reponse/new.html.twig', [
        'reponse' => $reponse,
        'form' => $form->createView(),
        'quiz' => $quiz,
    ]);
}


    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

   #[Route('/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request,
    Reponse $reponse,
    EntityManagerInterface $entityManager,
    ReponseRepository $reponseRepository
): Response
{
    $form = $this->createForm(ReponseType::class, $reponse);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $quiz = $reponse->getQuiz();

        if ($reponse->isEstCorrecte()) {
            // Vérifier si une autre réponse correcte existe pour ce quiz
            $autreReponseCorrecte = $reponseRepository->findOneBy([
                'quiz' => $quiz,
                'estCorrecte' => true
            ]);

            if ($autreReponseCorrecte && $autreReponseCorrecte->getId() !== $reponse->getId()) {
                // Flash message d'erreur
                $this->addFlash('error', 'Impossible de modifier : ce quiz a déjà une réponse correcte.');
                
                // Redirection vers la liste des réponses du quiz
                return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quiz->getId()]);
            }
        }

        // Tout est OK, on persiste
        $entityManager->flush();
        $this->addFlash('success', 'Réponse modifiée avec succès !');

        return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quiz?->getId()]);
    }

    return $this->render('reponse/edit.html.twig', [
        'reponse' => $reponse,
        'form' => $form->createView(),
    ]);
}

   #[Route('/delete/{id<\d+>}', name: 'app_reponse_delete', methods: ['POST'])]
public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
{
    $submittedToken = $request->request->get('_token');

    if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $submittedToken)) {
        // Récupérer l'ID du quiz avant de supprimer la réponse
        $quizId = $reponse->getQuiz()?->getId();

        $entityManager->remove($reponse);
        $entityManager->flush();

        $this->addFlash('success', 'Réponse supprimée avec succès.');
    } else {
        $this->addFlash('error', 'Token CSRF invalide.');
        // On peut quand même récupérer l'ID du quiz pour rediriger
        $quizId = $reponse->getQuiz()?->getId();
    }

    // Rediriger vers la liste des réponses du quiz
    if ($quizId) {
        return $this->redirectToRoute('app_reponse_by_quiz', ['id' => $quizId]);
    }

    // Fallback si pas de quiz trouvé
    return $this->redirectToRoute('app_reponse_index');
}

    #[Route('/quiz/{id}', name: 'app_reponse_by_quiz', methods: ['GET'])]
public function listByQuiz(Quiz $quiz, ReponseRepository $reponseRepository): Response
{
    // Symfony résout automatiquement le Quiz grâce à l'ID dans l'URL
    $reponses = $reponseRepository->findBy(['quiz' => $quiz]);

    return $this->render('reponse/index.html.twig', [
        'reponses' => $reponses,
        'quiz' => $quiz,
    ]);
}                                             
}
