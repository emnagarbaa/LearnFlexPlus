<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/quiz')]
final class QuizController extends AbstractController
{
  #[Route('/admin/questionnaire', name: 'app_quiz_index', methods: ['GET', 'POST'])]
public function index(QuizRepository $quizRepository, Request $request, EntityManagerInterface $entityManager): Response
{
    // 🔹 Récupérer le mot-clé depuis la requête GET
    $search = $request->query->get('search', '');

    // 🔹 Récupérer le tri depuis la requête GET
    $sortField = $request->query->get('sortField', 'id');         // Tri par défaut : ID
    $sortDirection = $request->query->get('sortDirection', 'ASC'); // Tri par défaut : ASC

    // 🔹 Pagination
    $page = $request->query->getInt('page', 1);
    $limit = 10; // nombre de quiz par page

    // 🔹 Récupérer les quiz filtrés et triés
    $quizzes = $quizRepository->findBySearchAndSort($search, $sortField, $sortDirection, $page, $limit);

    // 🔹 Calcul du nombre total de pages pour la pagination
    $totalQuizzes = count($quizRepository->createQueryBuilder('q')
        ->where('q.titre LIKE :search OR q.question LIKE :search')
        ->setParameter('search', '%'.$search.'%')
        ->getQuery()
        ->getResult()
    );
    $totalPages = ceil($totalQuizzes / $limit);

    // 🔹 Formulaire pour ajouter un quiz
    $quiz = new Quiz();
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($quiz);
        $entityManager->flush();

        return $this->redirectToRoute('app_quiz_index');
    }

    // 🔹 Passer tout au template
    return $this->render('back/questionnaire.html.twig', [
        'quizzes' => $quizzes,
        'form' => $form->createView(),
        'search' => $search,
        'sortField' => $sortField,
        'sortDirection' => $sortDirection,
        'page' => $page,
        'totalPages' => $totalPages,
    ]);
}

    #[Route('/new', name: 'app_quiz_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $quiz = new Quiz();
        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($quiz);
            $entityManager->flush();

            return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/addQuiz.html.twig', [
            'quiz' => $quiz,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_quiz_show', methods: ['GET'])]
    public function show(Quiz $quiz): Response
    {
        return $this->render('quiz/show.html.twig', [
            'quiz' => $quiz,
        ]);
    }
#[Route('/{id}/edit', name: 'app_quiz_edit', methods: ['POST'])]
public function edit(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('edit_quiz', $request->request->get('_token'))) {

        $data = $request->request->all('quiz');

        $quiz->setTitre($data['titre'] ?? '');
        $quiz->setQuestion($data['question'] ?? '');
        $quiz->setDescription($data['description'] ?? '');
        $quiz->setDuree($data['duree'] ?? 0);
        $quiz->setEtat($data['etat'] ?? 'inactive');

        $entityManager->flush();
    }

    return $this->redirectToRoute('app_quiz_index');
}


    #[Route('/{id}', name: 'app_quiz_delete', methods: ['POST'])]
    public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quiz->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($quiz);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/quiz/{id}/reponses', name: 'app_reponse_quiz', methods: ['GET'])]
public function quizReponses(Quiz $quiz): Response
{
    // Les réponses liées à ce quiz
    $reponses = $quiz->getReponses();

    return $this->render('reponse/index.html.twig', [
        'quiz' => $quiz,
        'reponses' => $reponses,
    ]);
}

}
