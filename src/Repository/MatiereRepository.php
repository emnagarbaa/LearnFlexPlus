<?php

namespace App\Repository;

use App\Entity\Matiere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Matiere>
 */
class MatiereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matiere::class);
    }

    /**
     * Récupère la distribution des matières par section (pour le graphique circulaire).
     * SQL: SELECT section, COUNT(id) FROM matiere GROUP BY section
     */
    public function getSectionDistribution(): array
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m.section, COUNT(m.id) as count')
            ->groupBy('m.section')
            ->getQuery();

        $results = $qb->getResult();
        $distribution = [];

        foreach ($results as $result) {
            $distribution[$result['section']] = $result['count'];
        }

        return $distribution;
    }

    /**
     * Récupère la distribution des matières par niveau (pour le graphique à barres horizontal).
     * SQL: SELECT niveau, COUNT(id) FROM matiere GROUP BY niveau
     */
    public function getNiveauDistribution(): array
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m.niveau, COUNT(m.id) as count')
            ->groupBy('m.niveau')
            ->getQuery();

        $results = $qb->getResult();
        $distribution = [];

        foreach ($results as $result) {
            $distribution[$result['niveau']] = $result['count'];
        }

        return $distribution;
    }

    /**
     * Récupère les matières les plus récentes.
     * SQL: SELECT * FROM matiere ORDER BY date_creation DESC LIMIT :limit
     */
    public function findRecent(int $limit): array
    {
        return $this->findBy([], ['date_creation' => 'DESC'], $limit);
    }
}
