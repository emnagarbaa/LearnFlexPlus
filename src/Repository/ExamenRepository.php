<?php

namespace App\Repository;

use App\Entity\Examen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Examen>
 */
class ExamenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Examen::class);
    }

    //    /**
    //     * @return Examen[] Returns an array of Examen objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Examen
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
   public function searchByKeyword(string $keyword)
{
    // On transforme le mot-clé en minuscule pour ignorer la casse
    $keyword = strtolower($keyword);

    return $this->createQueryBuilder('e')
        ->where('LOWER(e.titre) LIKE :kw')
        ->orWhere('LOWER(e.description) LIKE :kw')
        ->orWhere('LOWER(e.matiere) LIKE :kw')
        ->setParameter('kw', '%'.$keyword.'%')
        ->orderBy('e.titre', 'ASC') // tri optionnel
        ->getQuery()
        ->getResult();
}

public function getExamenParNiveau(string $niveau): ?Examen
{
    return $this->createQueryBuilder('e')
        ->andWhere('e.niveau = :niveau')
        ->setParameter('niveau', $niveau)
        ->getQuery()
        ->getOneOrNullResult();
}
// src/Repository/ExamenRepository.php

public function getEtudiantsInscrits($examen): array
{
    return $this->getEntityManager()
        ->createQueryBuilder()
        ->select('DISTINCT u')
        ->from(Users::class, 'u')
        ->join('u.reponseExamens', 'r')
        ->join('r.examen', 'e')
        ->where('e.id = :id')
        ->setParameter('id', $examen->getId())
        ->getQuery()
        ->getResult();
}



}
