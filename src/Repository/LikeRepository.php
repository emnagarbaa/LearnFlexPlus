<?php

namespace App\Repository;

use App\Entity\Like;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Like::class);
    }

    /**
     * Compte les likes pour une publication
     */
    public function countLikesForPublication(int $publicationId): int
    {
        return $this->count([
            'id_publication' => $publicationId,
            'is_like' => true
        ]);
    }

    /**
     * Compte les dislikes pour une publication
     */
    public function countDislikesForPublication(int $publicationId): int
    {
        return $this->count([
            'id_publication' => $publicationId,
            'is_like' => false
        ]);
    }

    /**
     * Vérifie si un user a déjà voté sur une publication
     */
    public function findUserVoteForPublication(int $userId, int $publicationId): ?Like
    {
        return $this->findOneBy([
            'id_user' => $userId,
            'id_publication' => $publicationId
        ]);
    }

    /**
     * Compte les likes pour une communication
     */
    public function countLikesForCommunication(int $communicationId): int
    {
        return $this->count([
            'id_communication' => $communicationId,
            'is_like' => true
        ]);
    }

    /**
     * Compte les dislikes pour une communication
     */
    public function countDislikesForCommunication(int $communicationId): int
    {
        return $this->count([
            'id_communication' => $communicationId,
            'is_like' => false
        ]);
    }

    /**
     * Vérifie si un user a déjà voté sur une communication
     */
    public function findUserVoteForCommunication(int $userId, int $communicationId): ?Like
    {
        return $this->findOneBy([
            'id_user' => $userId,
            'id_communication' => $communicationId
        ]);
    }
}