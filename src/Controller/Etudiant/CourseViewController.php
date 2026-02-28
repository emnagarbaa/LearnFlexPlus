<?php

namespace App\Controller\Etudiant;

use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseViewController extends AbstractController
{
    #[Route('/etudiant/cours/{id}/view', name: 'app_etudiant_cours_view')]
    public function view(Cours $cours): Response
    {
        return $this->render('etudiant/cours/view.html.twig', [
            'cours' => $cours,
        ]);
    }
}
