<?php

namespace App\Controller\Enseignant;

use App\Service\GeminiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/ai')]
class AIController extends AbstractController
{
    #[Route('/generate-tips', name: 'app_back_ai_generate_tips', methods: ['POST'])]
    public function generateTips(Request $request, GeminiService $geminiService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $title = $data['title'] ?? '';
        $description = $data['description'] ?? '';

        if (empty($title) || empty($description)) {
            return new JsonResponse(['error' => 'Titre et descripti²on sont obligatoires.'], 400);
        }

        $tips = $geminiService->generateCourseTips($title, $description);

        return new JsonResponse(['tips' => $tips]);
    }
}