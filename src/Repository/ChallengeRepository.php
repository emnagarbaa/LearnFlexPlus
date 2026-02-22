<?php

namespace App\Repository;

use App\Entity\Challenge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Challenge>
 */
class ChallengeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Challenge::class);
    }

    //    /**
    //     * @return Challenge[] Returns an array of Challenge objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Challenge
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
   public function search(string $q): array
{
    return $this->createQueryBuilder('c')
        ->where('c.titrec LIKE :q')
        ->orWhere('c.descriptionc LIKE :q')
        ->orWhere('c.niveaudifficulte LIKE :q')
        ->orWhere('c.etat LIKE :q')
        ->setParameter('q', '%' . $q . '%')
        ->getQuery()
        ->getResult();
}
public function findByEtat(?string $etat): array
{
    $qb = $this->createQueryBuilder('c');

    if ($etat && $etat !== 'all') {
        $qb->andWhere('c.etat = :etat')
           ->setParameter('etat', $etat);
    }

    return $qb
        ->orderBy(
            "CASE 
                WHEN c.etat = 'actif' THEN 1
                WHEN c.etat = 'planifié' THEN 2
                WHEN c.etat = 'terminé' THEN 3
                WHEN c.etat = 'annulé' THEN 4
                ELSE 5
            END",
            'ASC'
        )
        ->addOrderBy('c.datelimite', 'ASC')
        ->getQuery()
        ->getResult();
}

}
