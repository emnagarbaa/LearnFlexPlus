<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends AbstractController
{
    #[Route('/translate', name: 'app_translate')]
    public function index(): Response
    {
        return $this->render('translate/index.html.twig');
    }

    #[Route('/translate/api', name: 'translate_api', methods: ['POST'])]
    public function translateText(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';
        $sourceLang = $data['source'] ?? 'auto';
        $targetLang = $data['target'] ?? 'en';

        if (empty($text)) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Le texte est vide'
            ], 400);
        }

        try {
            $translator = new GoogleTranslate();
            $translator->setSource($sourceLang);
            $translator->setTarget($targetLang);
            
            $translatedText = $translator->translate($text);

            return new JsonResponse([
                'success' => true,
                'original' => $text,
                'translated' => $translatedText,
                'source' => $sourceLang,
                'target' => $targetLang
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Erreur de traduction : ' . $e->getMessage()
            ], 500);
        }
    }
}