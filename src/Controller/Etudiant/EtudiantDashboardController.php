<?php

namespace App\Controller\Etudiant;

use App\Entity\Matiere;
use App\Repository\CoursRepository;
use App\Repository\MatiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant')]
class EtudiantDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_etudiant_dashboard')]
    public function dashboard(MatiereRepository $matiereRepository, CoursRepository $coursRepository): Response
    {
        $totalMatieres = $matiereRepository->count([]);
        $totalCours = $coursRepository->count([]);
        $totalHours = $coursRepository->getTotalDuration();

        return $this->render('etudiant/dashboard.html.twig', [
            'total_matieres' => $totalMatieres,
            'total_cours' => $totalCours,
            'total_hours' => $totalHours,
            'quizzes_done' => 0, // Placeholder since removed
            'avg_score' => 0, // Placeholder since removed
            'recent_matieres' => $matiereRepository->findRecent(6),
        ]);
    }

    #[Route('/matiere', name: 'app_etudiant_matiere_catalog')]
    public function matiereCatalog(MatiereRepository $matiereRepository): Response
    {
        $matieres = $matiereRepository->findAll();
        $sections = $matiereRepository->createQueryBuilder('m')
            ->select('DISTINCT m.section')
            ->getQuery()
            ->getResult();

        return $this->render('etudiant/matiere/catalog.html.twig', [
            'matieres' => $matieres,
            'sections' => array_column($sections, 'section')
        ]);
    }

    #[Route('/matiere/ajax-search', name: 'app_etudiant_matiere_search', methods: ['GET'])]
    public function ajaxSearch(Request $request, MatiereRepository $matiereRepository): Response
    {
        $query = $request->query->get('q', '');
        $section = $request->query->get('section', '');

        $qb = $matiereRepository->createQueryBuilder('m');

        if ($query) {
            $qb->andWhere('m.nom_matiere LIKE :query')
                ->setParameter('query', '%' . $query . '%');
        }

        if ($section) {
            $qb->andWhere('m.section = :section')
                ->setParameter('section', $section);
        }

        $matieres = $qb->getQuery()->getResult();

        return $this->render('etudiant/matiere/_catalog_list.html.twig', [
            'matieres' => $matieres,
        ]);
    }

    #[Route('/matiere/{id}/cours', name: 'app_etudiant_cours_list')]
    public function coursList(Matiere $matiere): Response
    {
        return $this->render('etudiant/cours/list.html.twig', [
            'matiere' => $matiere,
            'cours_list' => $matiere->getCours(),
        ]);
    }
}
