<?php

namespace App\Repository;

use App\Entity\Communication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Communication>
 */
class CommunicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Communication::class);
    }
    
    /**
     * Recherche avancée de communications
     * 
     * @param array $criteria Critères de recherche
     * @return \Doctrine\ORM\Query
     */
    public function search(array $criteria = [])
    {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.publication', 'p')
            ->addSelect('p')
            ->orderBy('c.dateHeure', 'DESC');
        
        // Recherche par mot-clé (description, lien, ou titre de publication)
        if (!empty($criteria['keyword'])) {
            $keyword = $criteria['keyword'];
            $qb->andWhere('c.descriptionDetaillee LIKE :keyword OR c.lien LIKE :keyword OR p.titre LIKE :keyword')
               ->setParameter('keyword', '%' . $keyword . '%');
        }
        
        // Filtre par type (live/record)
        if (!empty($criteria['type'])) {
            $qb->andWhere('c.type = :type')
               ->setParameter('type', $criteria['type']);
        }
        
        // Filtre par état (programmee, en_cours, terminee, annulee)
        if (!empty($criteria['etat'])) {
            $qb->andWhere('c.etat = :etat')
               ->setParameter('etat', $criteria['etat']);
        }
        
        // Filtre par date de début
        if (!empty($criteria['dateFrom'])) {
            // Vérifier si c'est un objet DateTime
            if ($criteria['dateFrom'] instanceof \DateTimeInterface) {
                $dateFrom = $criteria['dateFrom']->format('Y-m-d 00:00:00');
            } else {
                $dateFrom = $criteria['dateFrom'];
            }
            
            $qb->andWhere('c.dateHeure >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        // Filtre par date de fin
        if (!empty($criteria['dateTo'])) {
            // Vérifier si c'est un objet DateTime
            if ($criteria['dateTo'] instanceof \DateTimeInterface) {
                $dateTo = clone $criteria['dateTo'];
                $dateTo->modify('+1 day');
                $dateToStr = $dateTo->format('Y-m-d 00:00:00');
            } else {
                $dateToStr = $criteria['dateTo'];
            }
            
            $qb->andWhere('c.dateHeure < :dateTo')
               ->setParameter('dateTo', $dateToStr);
        }
        
        return $qb->getQuery();
    }
    
    /**
     * Trouve les communications à venir
     */
    public function findUpcoming(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.dateHeure > :now')
            ->andWhere('c.etat IN (:states)')
            ->setParameter('now', new \DateTime())
            ->setParameter('states', ['programmee', 'planifie'])
            ->orderBy('c.dateHeure', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Trouve les communications live en cours
     */
    public function findLive(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.etat = :etat')
            ->setParameter('etat', 'en_cours')
            ->orderBy('c.dateHeure', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
   /**
 * Statistiques des communications
 */
public function getStatistics(): array
{
    // Compter par type ET par état
    $qb = $this->createQueryBuilder('c')
        ->select('c.type, c.etat, COUNT(c.id) as count')
        ->groupBy('c.type, c.etat');
    
    $results = $qb->getQuery()->getResult();
    
    // Initialiser les compteurs
    $stats = [
        'total' => $this->count([]),
        'live' => $this->count(['type' => 'live']),
        'record' => $this->count(['type' => 'record']),
        'programmee' => $this->count(['etat' => 'programmee']) + $this->count(['etat' => 'planifie']),
        'en_cours' => $this->count(['etat' => 'en_cours']),
        'terminee' => $this->count(['etat' => 'terminee']) + $this->count(['etat' => 'termine']),
        'annulee' => $this->count(['etat' => 'annulee']) + $this->count(['etat' => 'annule']),
        'repartition' => []
    ];
    
    // Calculer le taux en direct
    $stats['taux_live'] = $stats['total'] > 0 ? round(($stats['live'] / $stats['total']) * 100) : 0;
    
    // Organiser les résultats par type et état
    foreach ($results as $result) {
        $type = $result['type'];
        $etat = $result['etat'];
        $count = $result['count'];
        
        // Normaliser les noms d'états
        if ($etat === 'planifie') {
            $etat = 'programmee';
        } elseif ($etat === 'termine') {
            $etat = 'terminee';
        } elseif ($etat === 'annule') {
            $etat = 'annulee';
        }
        
        if (!isset($stats['repartition'][$type])) {
            $stats['repartition'][$type] = [
                'programmee' => 0,
                'en_cours' => 0,
                'terminee' => 0,
                'annulee' => 0,
                'total' => 0
            ];
        }
        
        $stats['repartition'][$type][$etat] = $count;
        $stats['repartition'][$type]['total'] += $count;
    }
    
    // S'assurer que les types live et record existent
    if (!isset($stats['repartition']['live'])) {
        $stats['repartition']['live'] = [
            'programmee' => 0,
            'en_cours' => 0,
            'terminee' => 0,
            'annulee' => 0,
            'total' => 0
        ];
    }
    
    if (!isset($stats['repartition']['record'])) {
        $stats['repartition']['record'] = [
            'programmee' => 0,
            'en_cours' => 0,
            'terminee' => 0,
            'annulee' => 0,
            'total' => 0
        ];
    }
    
    return $stats;
}
}