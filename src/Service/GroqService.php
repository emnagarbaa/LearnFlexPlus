<?php
// ✅ NOUVEAU FICHIER → à placer dans : src/Service/GroqService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class GroqService
{
    private const API_URL = 'https://api.groq.com/openai/v1/chat/completions';
private const MODEL = 'openai/gpt-oss-20b';

    public function __construct(
        private HttpClientInterface $httpClient,
        private LoggerInterface     $logger,
        private string              $groqApiKey
    ) {}

    public function generateQuestions(
        string $sujet,
        string $type  = 'qcm',
        int    $count = 5,
        string $level = 'intermédiaire'
    ): array {
        $prompt = $this->buildPrompt($sujet, $type, $count, $level);

        try {
            $response = $this->httpClient->request('POST', self::API_URL, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->groqApiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'       => self::MODEL,
                    'messages'    => [
                        [
                            'role'    => 'system',
                            'content' => 'Tu es un expert pédagogique. Tu génères UNIQUEMENT du JSON valide, sans texte autour, sans markdown.',
                        ],
                        [
                            'role'    => 'user',
                            'content' => $prompt,
                        ],
                    ],
                    'temperature' => 0.7,
                    'max_tokens'  => 2048,
                ],
            ]);

            $data = $response->toArray();
            $raw  = $data['choices'][0]['message']['content'] ?? '';

            return $this->parseJson($raw);

        } catch (\Exception $e) {
            $this->logger->error('[GroqService] ' . $e->getMessage());
            throw new \RuntimeException('Erreur Groq : ' . $e->getMessage());
        }
    }
public function generateFeedback(string $prompt): string
{
    try {
        $response = $this->httpClient->request('POST', self::API_URL, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->groqApiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => [
                'model'    => self::MODEL,
                'messages' => [
                    [
                        'role'    => 'system',
                        'content' => 'Tu es un coach pédagogique bienveillant. Tu réponds toujours en français.'
                    ],
                    [
                        'role'    => 'user',
                        'content' => $prompt
                    ]
                ],
                'temperature' => 0.7,
                'max_tokens'  => 300,
            ],
        ]);

        $data = $response->toArray();
        return $data['choices'][0]['message']['content'] ?? 'Feedback indisponible.';

    } catch (\Exception $e) {
        $this->logger->error('[GroqService] generateFeedback : ' . $e->getMessage());
        throw new \RuntimeException('Erreur feedback : ' . $e->getMessage());
    }
}
    private function buildPrompt(string $sujet, string $type, int $count, string $level): string
    {
        return match ($type) {

            'qcm' => <<<PROMPT
                Génère {$count} questions QCM sur "{$sujet}" niveau {$level}.
                Réponds UNIQUEMENT avec ce JSON (sans markdown) :
                {
                  "type": "qcm",
                  "questions": [
                    {
                      "question": "...",
                      "choices": ["A. ...", "B. ...", "C. ...", "D. ..."],
                      "correct_answer": "A",
                      "explanation": "..."
                    }
                  ]
                }
                PROMPT,

            'truefalse' => <<<PROMPT
                Génère {$count} questions Vrai/Faux sur "{$sujet}" niveau {$level}.
                Réponds UNIQUEMENT avec ce JSON (sans markdown) :
                {
                  "type": "truefalse",
                  "questions": [
                    {
                      "question": "...",
                      "correct_answer": true,
                      "explanation": "..."
                    }
                  ]
                }
                PROMPT,

            'open' => <<<PROMPT
                Génère {$count} questions ouvertes sur "{$sujet}" niveau {$level}.
                Réponds UNIQUEMENT avec ce JSON (sans markdown) :
                {
                  "type": "open",
                  "questions": [
                    {
                      "question": "...",
                      "expected_keywords": ["mot1", "mot2", "mot3"],
                      "model_answer": "..."
                    }
                  ]
                }
                PROMPT,

            'auto' => <<<PROMPT
                Génère un mix de {$count} questions (QCM, Vrai/Faux, ouvertes) sur "{$sujet}" niveau {$level}.
                Réponds UNIQUEMENT avec ce JSON (sans markdown) :
                {
                  "type": "mixed",
                  "questions": [
                    {
                      "type": "qcm",
                      "question": "...",
                      "choices": ["A. ...", "B. ...", "C. ...", "D. ..."],
                      "correct_answer": "A",
                      "explanation": "..."
                    },
                    {
                      "type": "truefalse",
                      "question": "...",
                      "correct_answer": true,
                      "explanation": "..."
                    },
                    {
                      "type": "open",
                      "question": "...",
                      "expected_keywords": ["mot1", "mot2"],
                      "model_answer": "..."
                    }
                  ]
                }
                PROMPT,

            default => throw new \InvalidArgumentException("Type inconnu : $type"),
        };
    }

    private function parseJson(string $raw): array
    {
        $clean = preg_replace('/```(?:json)?\s*([\s\S]*?)```/', '$1', $raw);
        $clean = trim($clean ?? $raw);

        $decoded = json_decode($clean, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('JSON invalide reçu : ' . json_last_error_msg());
        }

        return $decoded;
    }
}