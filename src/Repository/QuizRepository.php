<?php

namespace App\Repository;

use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Quiz>
 */
class QuizRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quiz::class);
    }
// src/Repository/QuizRepository.php

public function findBySearchAndSort($search, $sortField, $sortDirection, $page = 1, $limit = 10)
{
    $qb = $this->createQueryBuilder('q');

    if ($search) {
        $qb->andWhere('q.titre LIKE :search OR q.question LIKE :search')
           ->setParameter('search', '%'.$search.'%');
    }

    $allowedSort = ['id', 'titre', 'duree']; // seules ces colonnes sont triables
    if (!in_array($sortField, $allowedSort)) {
        $sortField = 'id';
    }

    $qb->orderBy('q.' . $sortField, $sortDirection);

    $qb->setFirstResult(($page - 1) * $limit)
       ->setMaxResults($limit);

    return $qb->getQuery()->getResult();
}

//    /**
//     * @return Quiz[] Returns an array of Quiz objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Quiz
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
