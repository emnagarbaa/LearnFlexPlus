<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
<<<<<<< HEAD
use App\Repository\ChallengeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Challenge;
use App\Repository\ExamenRepository;
use App\Form\ChallengeType;
use App\Repository\CommentaireRepository;
use App\Entity\Examen;
use App\Entity\Commentaire;
use App\Entity\ReponseExamen;
use App\Repository\ReponseExamenRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;   
use App\Service\EmailService;
use App\Entity\Users;
=======
>>>>>>> origin/user

final class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
<<<<<<< HEAD
#[Route('/evaluation', name: 'front_evaluation')]
    public function afficherchallengef(
        ChallengeRepository $challengeRepo
    ): Response
    {
        // Récupérer les challenges actifs depuis la base
        $challenges = $challengeRepo->findBy(
            ['etat' => 'actif'],
        );

        return $this->render('front/evaluation.html.twig', [
            'challenges' => $challenges,
        ]);
    }


#[Route('/challenge/{id}', name: 'front_challenge')]
public function voirChallenge(Challenge $challenge): Response
{
 $questions = $challenge->getQuestion();     return $this->render('front/challenge.html.twig', [
        'challenge' => $challenge,
        'questions' => $questions,
    ]);
}

#[Route('/examen/{niveau}', name: 'front_examen')]
public function voirExamen(
    string $niveau, 
    ExamenRepository $examenRepository, 
    CommentaireRepository $commentaireRepository,
    ReponseExamenRepository $reponseExamenRepository // <- ajouté
): Response
{
$examen = $examenRepository->findOneBy(['niveauexamen' => $niveau]);
if (!$examen) {
    throw $this->createNotFoundException("Aucun examen trouvé pour le niveau $niveau");
}
    $questions = $examen->getQuestions() ? explode('|', $examen->getQuestions()) : [];
    $commentaires = $commentaireRepository->findBy(['examen' => $examen]);
    $isAccessible = !$this->isGranted('ROLE_ENSEIGNANT');

    // Crée la variable $reponsesExamen uniquement si l'utilisateur est enseignant
  $groupedResponses = [];

if ($this->isGranted('ROLE_ENSEIGNANT')) {

    $reponses = $reponseExamenRepository->findBy(['examen' => $examen]);

    foreach ($reponses as $r) {
        $id = $r->getEtudiant()->getId();

        if (!isset($groupedResponses[$id])) {
            $groupedResponses[$id] = [
                'etudiant' => $r->getEtudiant(),
                'reponses' => []
            ];
        }

        $groupedResponses[$id]['reponses'][] = [
            'question' => $r->getQuestion(),
            'reponse' => $r->getReponse()
        ];
    }
}


    return $this->render('front/examen.html.twig', [
        'examen' => $examen,
        'questions' => $questions,
        'commentaires' => $commentaires,
        'isAccessible' => $isAccessible,
'groupedResponses' => $groupedResponses,
    ]);
}

#[Route('/examen/{id}/submit', name: 'front_examen_submit', methods: ['POST'])]
public function submitExamen($id, Request $request, ExamenRepository $examenRepo, ManagerRegistry $doctrine)
{
    $em = $doctrine->getManager();
    $examen = $examenRepo->find($id);

    if (!$examen) {
        throw $this->createNotFoundException("Examen introuvable");
    }

    $user = $this->getUser();
    if (!$user) {
        return $this->json(['success' => false, 'message' => 'Vous devez être connecté']);
    }

    $reponses = $request->request->all(); // ['q1' => 'Réponse 1', ...]

    foreach($reponses as $key => $value){
        $reponseExamen = new ReponseExamen();
        $reponseExamen->setExamen($examen);
        $reponseExamen->setEtudiant($user);
        $reponseExamen->setQuestion($key);
        $reponseExamen->setReponse($value);
        $reponseExamen->setDateSoumission(new \DateTime());

        $em->persist($reponseExamen);
    }

    $em->flush();

    return $this->json(['success' => true, 'message' => 'Examen soumis avec succès !']);
}
#[Route('/examen/{id}/comments', name: 'examen_comments', methods: ['GET'])]
public function comments(int $id, CommentaireRepository $repo): JsonResponse
{
    $commentaires = $repo->findBy(['examen' => $id], ['datecre' => 'DESC']);
    
    $data = [];
    foreach ($commentaires as $c) {
        $data[] = [
            'id' => $c->getId(),
            'auteur' => $c->getAuteur(),
            'contenu' => $c->getContenu(),
            'date' => $c->getDatecre()?->format('d/m/Y H:i') ?? ''
        ];
    }

    return $this->json($data);
}
#[Route('/challenge/{id}/train', name: 'challenge_train')]
public function train(Challenge $challenge)
{
    return $this->render('challenge/train.html.twig', [
        'challenge' => $challenge
    ]);
}

#[Route('/send-test-email', name: 'send_test_email')]
public function sendEmail(MailerInterface $mailer): Response
{
    $email = (new Email())
        ->from('emnagarbaa200@gmail.com')   // ton email Gmail
        ->to('emnagarbaa200@gmail.com') // à qui tu veux envoyer
        ->subject('Test Symfony Mailer')
        ->text('Ceci est un email de test.')
        ->html('<p>Ceci est un email de test.</p>');

    try {
        $mailer->send($email);
        return new Response('Email envoyé avec succès !');
    } catch (\Exception $e) {
        return new Response('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
    }
}

=======
>>>>>>> origin/user
}
