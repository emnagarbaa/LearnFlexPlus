<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cours>
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }

    /**
     * Calcule la durée totale de tous les cours en heures.
     * Logique : Parcourt tous les cours, parse '2h 30min' avec regex, somme les minutes et convertit en heures.
     */
    public function getTotalDuration(): float
    {
        $cours = $this->findAll();
        $totalMinutes = 0;

        foreach ($cours as $c) {
            $durationStr = $c->getDureeTotale();
            if (preg_match('/(\d+)h/', $durationStr, $matches)) {
                $totalMinutes += (int) $matches[1] * 60;
            }
            if (preg_match('/(\d+)min/', $durationStr, $matches)) {
                $totalMinutes += (int) $matches[1];
            }
        }

        return floor($totalMinutes / 60);
    }

    /**
     * Calcule le volume horaire total par matière.
     * Retourne un tableau [NomMatiere => Heures] pour le graphique.
     */
    public function getVolumeHorairePerMatiere(): array
    {
        $cours = $this->findAll();
        $subjectDurations = [];

        foreach ($cours as $c) {
            if ($c->getMatiere()) {
                $subjectName = $c->getMatiere()->getNomMatiere();
                $durationStr = $c->getDureeTotale();
                $minutes = 0;

                if (preg_match('/(\d+)h/', $durationStr, $matches)) {
                    $minutes += (int) $matches[1] * 60;
                }
                if (preg_match('/(\d+)min/', $durationStr, $matches)) {
                    $minutes += (int) $matches[1];
                }

                $subjectDurations[$subjectName] = ($subjectDurations[$subjectName] ?? 0) + $minutes;
            }
        }

        $avgScoresData = [];
        foreach ($subjectDurations as $name => $totalMinutes) {
            $avgScoresData[$name] = round($totalMinutes / 60, 1);
        }

        return $avgScoresData;
    }

    /**
     * Récupère la répartition des cours par langue.
     * SQL: SELECT langue, COUNT(id) FROM cours GROUP BY langue
     */
    public function getLangueDistribution(): array
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c.langue, COUNT(c.id) as count')
            ->groupBy('c.langue')
            ->getQuery();

        $results = $qb->getResult();
        $distribution = [];

        foreach ($results as $result) {
            $distribution[$result['langue']] = $result['count'];
        }

        return $distribution;
    }
}
