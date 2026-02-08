<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Repository\QuizRepository;
use App\Repository\ReponseRepository; // ← pour gérer les réponses
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // ← obligatoire !
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // ou Attribute\Route selon ta version

final class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

#[Route('/quiz', name: 'front_quiz')]
public function indexQ(QuizRepository $quizRepository, Request $request): Response
{
    $quizId = $request->query->get('id'); // récupérer l'id du quiz si fourni

    if ($quizId) {
        // on récupère le quiz par son ID
        $quiz = $quizRepository->find($quizId);
        if (!$quiz || $quiz->getEtat() !== 'active') {
            $quiz = null; // pas trouvé ou inactif
        }
        return $this->render('front/quiz.html.twig', ['quiz' => $quiz]);
    }

    // sinon, comportement aléatoire comme avant
    $quizzes = $quizRepository->findBy(['etat' => 'active']);
    
    if (empty($quizzes)) {
        return $this->render('front/quiz.html.twig', ['quiz' => null]);
    }

    $session = $request->getSession();
    $seenQuizIds = $session->get('seen_quiz_ids', []);
    $availableQuizzes = array_filter($quizzes, fn($q) => !in_array($q->getId(), $seenQuizIds));

    if (empty($availableQuizzes)) {
        $session->remove('seen_quiz_ids');
        $availableQuizzes = $quizzes;
        $seenQuizIds = [];
    }

    $quiz = $availableQuizzes[array_rand($availableQuizzes)];
    $seenQuizIds[] = $quiz->getId();
    $session->set('seen_quiz_ids', $seenQuizIds);

    return $this->render('front/quiz.html.twig', ['quiz' => $quiz]);
}



    #[Route('/quiz/result', name: 'quiz_result', methods: ['POST'])]
public function result(Request $request, ReponseRepository $reponseRepo, QuizRepository $quizRepository): Response
{
    $reponseId = $request->request->get('reponse');
    $reponse = $reponseRepo->find($reponseId);

    $correct = $reponse?->isEstCorrecte() ?? false;

    // récupérer la session pour gérer les quiz déjà vus
    $session = $request->getSession();
    $seenQuizIds = $session->get('seen_quiz_ids', []);

    // ajouter le quiz actuel aux vus
    $quizId = $request->request->get('quiz_id');
    if ($quizId && !in_array($quizId, $seenQuizIds)) {
        $seenQuizIds[] = (int)$quizId;
        $session->set('seen_quiz_ids', $seenQuizIds);
    }

    // récupérer tous les quiz actifs
    $quizzes = $quizRepository->findBy(['etat' => 'active']);

    // filtrer ceux déjà vus
    $availableQuizzes = array_filter($quizzes, fn($q) => !in_array($q->getId(), $seenQuizIds));

    // si tous les quiz ont été vus, reset
    if (empty($availableQuizzes)) {
        $session->remove('seen_quiz_ids');
        $availableQuizzes = $quizzes;
    }

    // choisir le prochain quiz
    $nextQuiz = $availableQuizzes[array_rand($availableQuizzes)];

    return $this->render('front/result.html.twig', [
        'correct' => $correct,
        'quiz' => $nextQuiz
    ]);
}

    
}
