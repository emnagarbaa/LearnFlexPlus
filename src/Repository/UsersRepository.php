<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Users>
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    /**
     * Search users by keyword in nom, prenom, or email
     * Optional sorting by field and direction
     *
     * @param string|null $keyword
     * @param string $sort
     * @param string $direction
     * @return Users[]
     */
    public function searchByKeyword(?string $keyword, string $sort = 'id', string $direction = 'ASC'): array
    {
        $qb = $this->createQueryBuilder('u');

        if ($keyword) {
            $qb->where('u.nom LIKE :kw')
               ->orWhere('u.prenom LIKE :kw')
               ->orWhere('u.email LIKE :kw')
               ->setParameter('kw', '%' . $keyword . '%');
        }

        // Whitelist allowed fields to avoid SQL injection
        $allowedSorts = ['id', 'nom', 'prenom', 'role'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'id';
        }

        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';

        $qb->orderBy('u.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }
}
