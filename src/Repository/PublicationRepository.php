<?php

namespace App\Repository;

use App\Entity\Publication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Publication>
 */
class PublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publication::class);
    }

    /**
     * Recherche avancée de publications avec tri
     */
    public function search(
        ?int $id = null,
        ?string $titre = null, 
        ?string $categorie = null, 
        ?\DateTimeInterface $dateDebut = null, 
        ?\DateTimeInterface $dateFin = null,
        ?string $sortBy = 'dateCreation',
        ?string $sortOrder = 'DESC'
    ) {
        $qb = $this->createQueryBuilder('p');

        // Recherche par ID
        if ($id) {
            $qb->andWhere('p.id = :id')
               ->setParameter('id', $id);
        }

        // Recherche par titre (partielle)
        if ($titre) {
            $qb->andWhere('p.titre LIKE :titre')
               ->setParameter('titre', '%' . $titre . '%');
        }

        // Recherche par catégorie
        if ($categorie) {
            $qb->andWhere('p.categorie = :categorie')
               ->setParameter('categorie', $categorie);
        }

        // Recherche par date de début
        if ($dateDebut) {
            $qb->andWhere('p.dateCreation >= :dateDebut')
               ->setParameter('dateDebut', $dateDebut);
        }

        // Recherche par date de fin
        if ($dateFin) {
            $qb->andWhere('p.dateCreation <= :dateFin')
               ->setParameter('dateFin', $dateFin);
        }

        // Tri dynamique
        $allowedSortFields = ['id', 'titre', 'categorie', 'dateCreation', 'nombreVues', 'nombreLikes'];
        if (in_array($sortBy, $allowedSortFields)) {
            $qb->orderBy('p.' . $sortBy, strtoupper($sortOrder) === 'ASC' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('p.dateCreation', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Statistiques globales
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('p');

        $stats = [
            'total' => (int) $qb->select('COUNT(p.id)')->getQuery()->getSingleScalarResult(),
            'totalVues' => (int) $qb->select('SUM(p.nombreVues)')->getQuery()->getSingleScalarResult(),
            'totalLikes' => (int) $qb->select('SUM(p.nombreLikes)')->getQuery()->getSingleScalarResult(),
            'moyenneVues' => (float) $qb->select('AVG(p.nombreVues)')->getQuery()->getSingleScalarResult(),
            'moyenneLikes' => (float) $qb->select('AVG(p.nombreLikes)')->getQuery()->getSingleScalarResult(),
        ];

        return $stats;
    }

    /**
 * Statistiques par catégorie
 */
public function getStatisticsByCategory(): array
{
    $qb = $this->createQueryBuilder('p')
        ->select('p.categorie, COUNT(p.id) as nombre, SUM(p.nombreVues) as totalVues, SUM(p.nombreLikes) as totalLikes')
        ->where('p.categorie IS NOT NULL')  // Ajoute cette ligne pour filtrer les NULL
        ->groupBy('p.categorie')
        ->orderBy('nombre', 'DESC');

    $results = $qb->getQuery()->getResult();
    
    // Debug : afficher les résultats
    dump($results); // Supprime cette ligne après avoir testé
    
    return $results;
}

    /**
     * Top publications (les plus vues ou les plus likées)
     */
    public function getTopPublications(string $type = 'vues', int $limit = 10): array
    {
        $qb = $this->createQueryBuilder('p');

        if ($type === 'likes') {
            $qb->orderBy('p.nombreLikes', 'DESC');
        } else {
            $qb->orderBy('p.nombreVues', 'DESC');
        }

        $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
    /**
 * Méthode simplifiée pour l'export PDF
 */
public function searchForExport(?string $searchTerm = null, ?array $filters = []): array
{
    $qb = $this->createQueryBuilder('p');
    
    // Recherche par terme (ID ou titre)
    if ($searchTerm) {
        if (is_numeric($searchTerm)) {
            $qb->andWhere('p.id = :searchTerm')
               ->setParameter('searchTerm', (int)$searchTerm);
        } else {
            $qb->andWhere('p.titre LIKE :searchTerm OR p.contenu LIKE :searchTerm')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }
    }
    
    // Appliquer les autres filtres si présents
    if (!empty($filters)) {
        if (isset($filters['categorie']) && $filters['categorie']) {
            $qb->andWhere('p.categorie = :categorie')
               ->setParameter('categorie', $filters['categorie']);
        }
        
        if (isset($filters['dateDebut']) && $filters['dateDebut']) {
            $qb->andWhere('p.dateCreation >= :dateDebut')
               ->setParameter('dateDebut', $filters['dateDebut']);
        }
        
        if (isset($filters['dateFin']) && $filters['dateFin']) {
            $qb->andWhere('p.dateCreation <= :dateFin')
               ->setParameter('dateFin', $filters['dateFin']);
        }
    }
    
    $qb->orderBy('p.dateCreation', 'DESC');
    
    return $qb->getQuery()->getResult();
}
}