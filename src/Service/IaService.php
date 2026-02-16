<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class IaService
{
    private HttpClientInterface $client;
    private string $apiKey;
    private RequestStack $requestStack;

    public function __construct(HttpClientInterface $client, string $apiKey, RequestStack $requestStack)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->requestStack = $requestStack;
    }

public function getExplication(string $question, ?string $reponseEtudiant, ?string $bonneReponse, bool $estCorrecte, int $quizId): string
    {
        if (!$reponseEtudiant) {
    return "Tu n'as pas sélectionné de réponse.";
}

        $session = $this->requestStack->getSession();
$cacheKey = 'explication_quiz_' . $quizId . '_' . md5($reponseEtudiant . $question . $bonneReponse);

        if ($session->has($cacheKey)) {
            return $session->get($cacheKey);
        }

$prompt = "
Tu es un enseignant qui corrige un quiz scolaire.

IMPORTANT :
- La bonne réponse fournie est la référence officielle.
- L'étudiant peut écrire n'importe quoi (mot, nombre, phrase).
- Tu ne dois JAMAIS inventer une autre interprétation.

QUESTION :
$question

REPONSE ETUDIANT :
$reponseEtudiant

BONNE REPONSE :
$bonneReponse

Ta tâche :

1) Dire clairement si la réponse est correcte ou incorrecte.
2) Si incorrecte : expliquer pourquoi elle ne correspond pas à la bonne réponse.
3) Donner la bonne information sous forme simple (comme un professeur).
4) Donner une courte explication pédagogique liée au cours.

Contraintes :
- Maximum 5 lignes
- Français simple
- Pas de calcul inventé
- Pas d'hypothèse
- Ne pas interpréter la réponse de l'étudiant autrement que littéralement
";



        try {

            $response = $this->client->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    "model" => "llama-3.1-8b-instant",
                    "messages" => [
                        ["role" => "system", "content" => "Tu es un professeur qui explique les réponses d'un quiz à un étudiant de manière simple et pédagogique."],
                        ["role" => "user", "content" => $prompt]
                    ],
                    "temperature" => 0.4,
                    "max_tokens" => 300
                ]
            ]);

$data = $response->toArray();

            if (!isset($data['choices'][0]['message']['content'])) {
                throw new \Exception('Réponse IA vide');
            }

            $explication = trim($data['choices'][0]['message']['content']);

            $session->set($cacheKey, $explication);
            return $explication;

        } catch (\Throwable $e) {
    return "Erreur IA : " . $e->getMessage();
}


    }
}
