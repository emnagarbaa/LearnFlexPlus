<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Entity\Communication;
use App\Entity\Like;
use App\Repository\PublicationRepository;
use App\Repository\CommunicationRepository;
use App\Repository\LikeRepository;
use App\Form\PublicationType;
use App\Form\CommunicationType;
use App\Service\ContentModerationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    private ContentModerationService $moderationService;

    public function __construct(ContentModerationService $moderationService)
    {
        $this->moderationService = $moderationService;
    }

    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }

    #[Route('/front', name: 'app_front_old')]
    public function frontOld(): Response
    {
        return $this->redirectToRoute('app_front');
    }

    #[Route('/forum', name: 'forum_index')]
    public function forum(
        PublicationRepository $publicationRepository,
        CommunicationRepository $communicationRepository,
        LikeRepository $likeRepository
    ): Response
    {
        // Récupérer TOUTES les publications
        $publications = $publicationRepository->findAll();
        
        // Récupérer TOUTES les communications
        $communications = $communicationRepository->findAll();
        
        // Récupérer les compteurs de likes pour chaque publication
        $publicationLikes = [];
        foreach ($publications as $pub) {
            $publicationLikes[$pub->getId()] = [
                'likes' => $likeRepository->countLikesForPublication($pub->getId()),
                'dislikes' => $likeRepository->countDislikesForPublication($pub->getId())
            ];
        }
        
        // Calculer les totaux des likes et dislikes
        $totalLikes = 0;
        $totalDislikes = 0;
        foreach ($publications as $publication) {
            $totalLikes += $likeRepository->countLikesForPublication($publication->getId());
            $totalDislikes += $likeRepository->countDislikesForPublication($publication->getId());
        }
        
        // Filtrer les communications live et à venir
        $now = new \DateTime();
        $liveCommunications = [];
        $upcomingCommunications = [];
        
        foreach ($communications as $communication) {
            if ($communication->getEtat() === 'en_cours') {
                $liveCommunications[] = $communication;
            } elseif ($communication->getDateHeure() > $now && 
                     $communication->getEtat() === 'programmee') {
                $upcomingCommunications[] = $communication;
            }
        }

        return $this->render('front/forum.html.twig', [
            'publications' => $publications,
            'upcoming_communications' => $upcomingCommunications,
            'live_communications' => $liveCommunications,
            'publication_likes' => $publicationLikes,
            'likeRepository' => $likeRepository,
            'totalLikes' => $totalLikes,
            'totalDislikes' => $totalDislikes,
        ]);
    }

    #[Route('/forum/publication/{id}', name: 'forum_publication_show', requirements: ['id' => '\d+'])]
    public function showPublication(
        Publication $publication,
        CommunicationRepository $communicationRepository,
        LikeRepository $likeRepository
    ): Response
    {
        // Communications liées à cette publication
        $communications = $communicationRepository->findBy(['publication' => $publication]);
        
        // Récupérer le vote de l'utilisateur connecté
        $userVote = null;
        if ($this->getUser()) {
            $userVote = $likeRepository->findUserVoteForPublication(
                $this->getUser()->getId(),
                $publication->getId()
            );
        }

        return $this->render('front/publication_show.html.twig', [
            'publication' => $publication,
            'communications' => $communications,
            'likeRepository' => $likeRepository,
            'userVote' => $userVote,
        ]);
    }

    #[Route('/forum/publication/{id}/like/{type}', name: 'app_publication_like', methods: ['GET'])]
    public function toggleLike(
        Publication $publication,
        string $type,
        LikeRepository $likeRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour voter');
            return $this->redirectToRoute('app_login');
        }

        // Vérifier le type
        if (!in_array($type, ['like', 'dislike'])) {
            throw $this->createNotFoundException('Type de vote invalide');
        }

        $isLike = ($type === 'like');

        // Vérifier si l'utilisateur a déjà voté
        $existingVote = $likeRepository->findUserVoteForPublication(
            $user->getId(), 
            $publication->getId()
        );

        if ($existingVote) {
            // Si le vote existe déjà avec le même type, on le supprime
            if ($existingVote->getIsLike() === $isLike) {
                $entityManager->remove($existingVote);
                $this->addFlash('success', 'Votre vote a été retiré');
            } 
            // Si le vote existe mais avec un type différent, on le met à jour
            else {
                $existingVote->setIsLike($isLike);
                $existingVote->setDateCreation(new \DateTime());
                $this->addFlash('success', 'Votre vote a été modifié');
            }
        } else {
            // Créer un nouveau vote
            $like = new Like();
            $like->setIdUser($user->getId());
            $like->setIdPublication($publication->getId());
            $like->setIsLike($isLike);
            
            $entityManager->persist($like);
            $this->addFlash('success', 'Votre vote a été enregistré');
        }

        $entityManager->flush();

        return $this->redirectToRoute('forum_publication_show', ['id' => $publication->getId()]);
    }

    #[Route('/forum/publication/new', name: 'forum_publication_new')]
    public function newPublication(Request $request, EntityManagerInterface $entityManager): Response
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
                
                return $this->render('front/publication_new.html.twig', [
                    'form' => $form->createView()
                ]);
            }
            
            // Si tout est OK, on persiste
            $publication->setDateCreation(new \DateTime());
            $publication->setNombreLikes(0);
            $publication->setNombreVues(0);
            
            $entityManager->persist($publication);
            $entityManager->flush();

            $this->addFlash('success', 'Publication créée avec succès !');
            return $this->redirectToRoute('forum_publication_show', ['id' => $publication->getId()]);
        }

        return $this->render('front/publication_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication', name: 'forum_communication_index', methods: ['GET'])]
    public function communicationIndex(
        CommunicationRepository $communicationRepository,
        LikeRepository $likeRepository
    ): Response
    {
        $communications = $communicationRepository->findAll();
        
        // Récupérer les compteurs de likes pour chaque communication
        $communicationLikes = [];
        foreach ($communications as $comm) {
            $communicationLikes[$comm->getId()] = [
                'likes' => $likeRepository->countLikesForCommunication($comm->getId()),
                'dislikes' => $likeRepository->countDislikesForCommunication($comm->getId())
            ];
        }
        
        return $this->render('front/communication_index.html.twig', [
            'communications' => $communications,
            'communication_likes' => $communicationLikes,
        ]);
    }

    #[Route('/forum/communication/{id}', name: 'forum_communication_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showCommunication(
        Communication $communication,
        LikeRepository $likeRepository
    ): Response
    {
        // Récupérer le vote de l'utilisateur connecté
        $userVote = null;
        if ($this->getUser()) {
            $userVote = $likeRepository->findUserVoteForCommunication(
                $this->getUser()->getId(),
                $communication->getId()
            );
        }

        return $this->render('front/communication_show.html.twig', [
            'communication' => $communication,
            'likeRepository' => $likeRepository,
            'userVote' => $userVote,
        ]);
    }

    #[Route('/forum/communication/{id}/like/{type}', name: 'app_communication_like', methods: ['GET'])]
    public function toggleCommunicationLike(
        Communication $communication,
        string $type,
        LikeRepository $likeRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour voter');
            return $this->redirectToRoute('app_login');
        }

        // Vérifier le type
        if (!in_array($type, ['like', 'dislike'])) {
            throw $this->createNotFoundException('Type de vote invalide');
        }

        $isLike = ($type === 'like');

        // Vérifier si l'utilisateur a déjà voté
        $existingVote = $likeRepository->findUserVoteForCommunication(
            $user->getId(), 
            $communication->getId()
        );

        if ($existingVote) {
            // Si le vote existe déjà avec le même type, on le supprime
            if ($existingVote->getIsLike() === $isLike) {
                $entityManager->remove($existingVote);
                $this->addFlash('success', 'Votre vote a été retiré');
            } 
            // Si le vote existe mais avec un type différent, on le met à jour
            else {
                $existingVote->setIsLike($isLike);
                $existingVote->setDateCreation(new \DateTime());
                $this->addFlash('success', 'Votre vote a été modifié');
            }
        } else {
            // Créer un nouveau vote
            $like = new Like();
            $like->setIdUser($user->getId());
            $like->setIdCommunication($communication->getId());
            $like->setIsLike($isLike);
            
            $entityManager->persist($like);
            $this->addFlash('success', 'Votre vote a été enregistré');
        }

        $entityManager->flush();

        return $this->redirectToRoute('forum_communication_show', ['id' => $communication->getId()]);
    }

    #[Route('/forum/communication/new', name: 'forum_communication_new')]
    public function newCommunication(Request $request, EntityManagerInterface $entityManager): Response
    {
        $communication = new Communication();
        $form = $this->createForm(CommunicationType::class, $communication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // ✅ VÉRIFICATION DES MOTS INAPPROPRIÉS POUR COMMUNICATION
            $description = $communication->getDescriptionDetaillee();
            
            if ($description) {
                $checkDescription = $this->moderationService->checkContent($description);
                
                if (!$checkDescription['isClean']) {
                    $this->addFlash('error', 
                        '⚠️ Votre communication contient des mots inappropriés : ' . 
                        implode(', ', $checkDescription['foundWords']) . 
                        '. Veuillez modifier votre texte.'
                    );
                    
                    return $this->render('front/communication_new.html.twig', [
                        'form' => $form->createView()
                    ]);
                }
            }
            
            $entityManager->persist($communication);
            $entityManager->flush();

            $this->addFlash('success', 'Communication programmée avec succès !');
            return $this->redirectToRoute('forum_communication_index');
        }

        return $this->render('front/communication_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication/{id}/edit', name: 'forum_communication_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function editCommunication(
        Request $request, 
        Communication $communication,
        EntityManagerInterface $entityManager
    ): Response
    {
        $form = $this->createForm(CommunicationType::class, $communication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // ✅ VÉRIFICATION DES MOTS INAPPROPRIÉS POUR COMMUNICATION
            $description = $communication->getDescriptionDetaillee();
            
            if ($description) {
                $checkDescription = $this->moderationService->checkContent($description);
                
                if (!$checkDescription['isClean']) {
                    $this->addFlash('error', 
                        '⚠️ Votre communication contient des mots inappropriés : ' . 
                        implode(', ', $checkDescription['foundWords']) . 
                        '. Veuillez modifier votre texte.'
                    );
                    
                    return $this->render('front/communication_edit.html.twig', [
                        'communication' => $communication,
                        'form' => $form->createView()
                    ]);
                }
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'Communication mise à jour avec succès !');
            return $this->redirectToRoute('forum_communication_show', ['id' => $communication->getId()]);
        }

        return $this->render('front/communication_edit.html.twig', [
            'communication' => $communication,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/communication/{id}/delete', name: 'forum_communication_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function deleteCommunication(
        Request $request, 
        Communication $communication,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$communication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($communication);
            $entityManager->flush();
            
            $this->addFlash('success', 'Communication supprimée avec succès !');
        }

        return $this->redirectToRoute('forum_communication_index');
    }

    #[Route('/forum/communication/{id}/join', name: 'forum_communication_join', requirements: ['id' => '\d+'])]
    public function joinCommunication(Communication $communication): Response
    {
        if ($communication->getEtat() !== 'en_cours') {
            $this->addFlash('error', 'Cette communication n\'est pas en direct.');
            return $this->redirectToRoute('forum_index');
        }

        if (!$communication->getLien()) {
            $this->addFlash('error', 'Aucun lien disponible pour cette communication.');
            return $this->redirectToRoute('forum_index');
        }

        // Redirection vers le lien
        return $this->redirect($communication->getLien());
    }
    
    #[Route('/forum/chat', name: 'communication_chat')]
    public function chat(Request $request, CommunicationRepository $communicationRepository): Response
    {
        // Récupérer les filtres depuis l'URL
        $type = $request->query->get('type', null);
        $etat = $request->query->get('etat', null);
        
        $criteria = [];
        if ($type && in_array($type, ['live', 'record'])) {
            $criteria['type'] = $type;
        }
        if ($etat && in_array($etat, ['en_cours', 'terminee', 'termine', 'annulee', 'annule', 'programmee'])) {
            $criteria['etat'] = $etat;
        }
        
        // Rechercher les communications avec ou sans filtre
        if (!empty($criteria)) {
            $communications = $communicationRepository->findBy(
                $criteria,
                ['dateHeure' => 'DESC'],
                20
            );
        } else {
            $communications = $communicationRepository->findBy(
                [],
                ['dateHeure' => 'DESC'],
                20
            );
        }
        
        return $this->render('front/communication_chat.html.twig', [
            'communications' => $communications,
            'selectedType' => $type,
            'selectedEtat' => $etat,
        ]);
    }
    
    #[Route('/check-messages', name: 'check_messages')]
    public function checkMessages(CommunicationRepository $repo): JsonResponse
    {
        $count = $repo->count([]);
        $messages = $repo->findBy([], ['id' => 'DESC'], 5);
        
        $data = [];
        foreach ($messages as $msg) {
            $data[] = [
                'id' => $msg->getId(),
                'type' => $msg->getType(),
                'message' => $msg->getDescriptionDetaillee(),
                'date' => $msg->getDateHeure()->format('Y-m-d H:i:s')
            ];
        }
        
        return $this->json([
            'count' => $count,
            'messages' => $data
        ]);
    }
}