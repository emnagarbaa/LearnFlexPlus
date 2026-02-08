<?php

namespace App\Controller;

use App\Repository\UsersRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(UsersRepository $userRepository): Response
    {
        // Total users
        $totalUsers = $userRepository->count([]);

        // Last 5 users for table
        $recentUsers = $userRepository->findBy([], ['createdAt' => 'DESC'], 5);

        // Users per role chart data
        $roles = ['Etudiant', 'Enseignant', 'Admin']; // Adjust roles according to your DB
        $usersChartData = [];
        foreach ($roles as $role) {
            $usersChartData[] = $userRepository->count(['role' => $role]);
        }

        $usersChart = [
            'labels' => json_encode($roles),
            'data' => json_encode($usersChartData)
        ];

        return $this->render('dashboard/index.html.twig', [
            'totalUsers' => $totalUsers,
            'recentUsers' => $recentUsers,
            'usersChart' => $usersChart,
        ]);
    }
}
