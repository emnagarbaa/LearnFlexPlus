<?php
// src/Controller/LikeController.php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Publication;
use App\Repository\LikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LikeController extends AbstractController
{
    #[Route('/publication/{id}/like/{type}', name: 'app_publication_like', methods: ['GET'])]
    public function toggleLike(
        Publication $publication, 
        string $type, // 'like' ou 'dislike'
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

        // Rediriger vers la page de la publication
        return $this->redirectToRoute('forum_publication_show', ['id' => $publication->getId()]);
    }
}