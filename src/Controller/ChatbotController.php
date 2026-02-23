<?php

namespace App\Controller;

use App\Service\ChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ChatbotController extends AbstractController
{
    private ChatbotService $chatbotService;

    public function __construct(ChatbotService $chatbotService)
    {
        $this->chatbotService = $chatbotService;
    }

    /**
     * Page d'accueil du chatbot
     */
    #[Route('/chatbot', name: 'app_chatbot')]
    public function index(): Response
    {
        return $this->render('chatbot/index.html.twig');
    }

    /**
     * API pour envoyer un message au chatbot
     */
    #[Route('/chatbot/message', name: 'chatbot_message', methods: ['POST'])]
    public function sendMessage(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';
        $conversationHistory = $data['history'] ?? [];

        if (empty($userMessage)) {
            return new JsonResponse([
                'response' => 'Veuillez poser une question.',
                'error' => true
            ], 400);
        }

        // ✅ Vérifier si la question est dans le contexte
        if (!$this->chatbotService->isQuestionInContext($userMessage)) {
            return new JsonResponse([
                'response' => "Je suis désolé, mais je suis l'assistant de LearnFlex+ et je ne peux répondre qu'aux questions concernant notre plateforme d'apprentissage. Avez-vous une question sur l'utilisation de LearnFlex+ ?",
                'error' => false,
                'out_of_context' => true
            ]);
        }

        // ✅ Envoyer la question au chatbot
        $result = $this->chatbotService->chat($userMessage, $conversationHistory);

        return new JsonResponse($result);
    }
}