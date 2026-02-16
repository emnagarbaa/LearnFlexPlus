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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Service\IaService;

#[Route('/quiz')]
final class QuizController extends AbstractController
{
  #[IsGranted('ROLE_ENSEIGNANT')]
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
#[IsGranted('ROLE_ENSEIGNANT')]
    #[Route('/new', name: 'app_quiz_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $quiz = new Quiz(); 
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

        // 🔹 Récupération et nettoyage
        $titre = trim($quiz->getTitre());
        $question = trim($quiz->getQuestion());
        $description = trim($quiz->getDescription() ?? '');
        $duree = $quiz->getDuree();
        $etat = $quiz->getEtat();

        $errors = [];

        // Validation des champs
        if (empty($titre)) {
            $errors[] = "Le titre est obligatoire.";
        }

        if (empty($question)) {
            $errors[] = "La question est obligatoire.";
        }

        if (!is_int($duree) || $duree <= 0) {
            $errors[] = "La durée doit être un entier positif.";
        }

        // 🔹 Validation stricte de l'état
        if (!in_array($etat, ['active', 'inactive'])) {
            $errors[] = "L'état doit être 'active' ou 'inactive'. Le quiz ne sera pas enregistré.";
        }

        // Si il y a des erreurs, on affiche les messages et on **ne persiste pas**
        if (!empty($errors)) {
            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
            return $this->redirectToRoute('app_quiz_index');
        }

        // 🔹 Tout est correct => persistance en BDD
        $entityManager->persist($quiz);
        $entityManager->flush();

        $this->addFlash('success', 'Le quiz a été ajouté avec succès !');
        return $this->redirectToRoute('app_quiz_index');
    }

    // Redirection si formulaire non soumis
    return $this->redirectToRoute('app_quiz_index'); 
}
#[IsGranted('ROLE_ETUDIANT')]
    #[Route('/{id}', name: 'app_quiz_show', methods: ['GET'])]
    public function show(Quiz $quiz): Response
    {
        return $this->render('quiz/show.html.twig', [
            'quiz' => $quiz,
        ]);
    }
#[IsGranted('ROLE_ENSEIGNANT')]
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
        $this->addFlash('success', 'Le quiz a été modifié avec succès !');

    }

    return $this->redirectToRoute('app_quiz_index');
}

#[IsGranted('ROLE_ENSEIGNANT')]
    #[Route('/{id}', name: 'app_quiz_delete', methods: ['POST'])]
    public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quiz->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($quiz); // Supprime le quiz
            $entityManager->flush();// Applique la suppression dans la BDD
            $this->addFlash('error', 'Le quiz a été supprimé.');// Message flash

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

  #[Route('/admin/quiz/pdf', name: 'app_quizzes_pdf')]
    public function generatePdf(QuizRepository $quizRepository): Response
    {
        // 1. Récupérer tous les quiz depuis la base de données
        $quizzes = $quizRepository->findAll();

        // 2. Rendre le template Twig en HTML
        $html = $this->renderView('quiz/pdf_quizzes.html.twig', [
            'quizzes' => $quizzes
        ]);

        // 3. Configurer Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Poppins');
        $dompdf = new Dompdf($options);

        // 4. Charger le HTML
        $dompdf->loadHtml($html);

        // 5. Définir le format de la page
        $dompdf->setPaper('A4', 'portrait');

        // 6. Générer le PDF
        $dompdf->render();

        // 7. Récupérer le contenu du PDF
        $pdfContent = $dompdf->output();

        // 8. Retourner la réponse avec le PDF
        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="quizzes.pdf"',
        ]);
    }

#[Route('/quiz/resultat/{id}', name: 'quiz_result')]
public function corriger(Quiz $quiz, Request $request, IaService $iaService)
{
$reponseEtudiant = $request->request->get('reponse');
if (!$reponseEtudiant) {
    return $this->redirectToRoute('front_quiz');
}

    $bonneReponse = $quiz->getReponses()->filter(fn($r) => $r->isEstCorrecte())->first();
    
$estCorrecte = $this->normaliser($reponseEtudiant) === $this->normaliser($bonneReponse?->getText());

    // ⚡ Générer explication avec Cohere
  if ($estCorrecte) {
    $explication = "Bonne réponse 👍 Continue comme ça !";
} else {
    $explication = $iaService->getExplication(
        $quiz->getQuestion(), 
        $reponseEtudiant,
        $bonneReponse?->getText(),
        $estCorrecte,
        $quiz->getId()
    );
}
    return $this->render('front/result.html.twig', [
        'estCorrecte' => $estCorrecte,
        'quiz' => $quiz,
        'reponseEtudiant' => $reponseEtudiant,
        'bonneReponse' => $bonneReponse?->getText(),
        'explication' => $explication
    ]);
}

private function normaliser(?string $texte): string
{
    if ($texte === null) {
        return '';
    }

    // minuscules
    $texte = strtolower($texte);

    // enlever tous les espaces et tabulations
    $texte = preg_replace('/\s+/', '', $texte);

    // harmoniser les symboles mathématiques
    $texte = str_replace(['×', 'x'], '*', $texte); // x et × → *
    $texte = str_replace(['²'], '^2', $texte);     // puissance
    $texte = str_replace(['–', '−'], '-', $texte); // tirets spéciaux → -

    // enlever tout caractère invisible (UTF8)
    $texte = preg_replace('/[^\P{C}]+/u', '', $texte);

    return $texte;
}



}