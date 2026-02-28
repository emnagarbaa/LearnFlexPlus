<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiService
{
    private $httpClient;
    private $apiKey;
    private $apiUrl;

    public function __construct(HttpClientInterface $httpClient, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent';
    }

    public function generateTips(string $title, string $description): ?string
    {
        $prompt = "En tant qu'expert pédagogique, donne 3 conseils courts et précis pour améliorer le contenu et la structure de ce cours :\nTitre : $title\nDescription : $description\n\nFormat: 1. Conseil 1, 2. Conseil 2, 3. Conseil 3.";

        try {
            //Appel API
            $response = $this->httpClient->request('POST', "{$this->apiUrl}?key={$this->apiKey}", [
                //Structure envoyée à Gemini
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]
            ]);

            $result = $response->toArray();//Lire la réponse
            return $result['candidates'][0]['content']['parts'][0]['text'] ?? null;
        }
        catch (\Exception $e) {
            return null;
        }
    }

    public function generateCourseContent(string $title): ?array
    {
        $prompt = "Tu es un expert en création de contenu éducatif. Génère un contenu complet pour un cours intitulé: '$title'. Réponds UNIQUEMENT en format JSON avec cette structure: {\"description\": \"...\", \"chapters\": [\"Chapitre 1: ...\", \"Chapitre 2: ...\"], \"objectives\": [\"Objectif 1\", \"Objectif 2\"], \"prerequisites\": [\"Prérequis 1\"], \"exercises\": [\"Exercice 1\", \"Exercice 2\"]}";

        try {
            $response = $this->httpClient->request('POST', "{$this->apiUrl}?key={$this->apiKey}", [
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]
            ]);

            $result = $response->toArray();
            if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
                $text = $result['candidates'][0]['content']['parts'][0]['text'];
                // Clean up markdown blocks if AI accidentally included them
                $text = preg_replace('/^```json\s*/i', '', $text);
                $text = preg_replace('/\s*```$/i', '', $text);
                return json_decode($text, true);
            }
            return null;
        }
        catch (\Exception $e) {
            return null;
        }
    }
}
