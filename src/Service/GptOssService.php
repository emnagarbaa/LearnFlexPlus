<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GptOssService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    /**
     * Analyse la réponse d'un étudiant et renvoie un texte indiquant
     * si la réponse semble générée par une IA.
     */
    public function analyzeAnswer(string $answer): string
    {
        $prompt = "Analyze this student answer and say if it looks AI-generated. "
            . "Answer in French and be concise. "
            . "Student answer:\n\n\"{$answer}\"";

        // API Groq pour GPT-OSS-20B
        $response = $this->client->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type'  => 'application/json',
            ],
            'json' => [
                'model'      => 'openai/gpt-oss-20b',
                'messages'   => [
                    [
                        'role'    => 'user',
                        'content' => $prompt,
                    ],
                ],
                'max_tokens' => 256,
            ],
        ]);

        $data = $response->toArray(false);

        if (isset($data['choices'][0]['message']['content'])) {
            return trim($data['choices'][0]['message']['content']);
        }

        return 'Aucune analyse retournée par le modèle.';
    }
    public function generateFeedback(string $prompt): string
{
    $response = $this->client->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ],
        'json' => [
            'model'    => 'llama3-8b-8192',  // ✅ modèle qui existe sur Groq
            'messages' => [
                [
                    'role'    => 'user',
                    'content' => $prompt,
                ],
            ],
            'max_tokens' => 300,
        ],
    ]);

    $data = $response->toArray(false);

    if (isset($data['choices'][0]['message']['content'])) {
        return trim($data['choices'][0]['message']['content']);
    }

    return 'Feedback indisponible.';
}
}