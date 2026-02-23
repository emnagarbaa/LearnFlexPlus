<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherController extends AbstractController
{
    private HttpClientInterface $httpClient;
    private string $apiKey;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $_ENV['OPENWEATHER_API_KEY'] ?? '';
    }

    #[Route('/weather', name: 'app_weather')]
    public function index(): Response
    {
        return $this->render('weather/index.html.twig');
    }

    #[Route('/weather/api', name: 'weather_api', methods: ['GET'])]
    public function getWeather(Request $request): JsonResponse
    {
        $city = $request->query->get('city', 'Tunis');

        if (empty($this->apiKey)) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Clé API non configurée'
            ], 500);
        }

        try {
            // Appel à l'API OpenWeatherMap
            $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
                'query' => [
                    'q' => $city,
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                    'lang' => 'fr'
                ]
            ]);

            $data = $response->toArray();

            return new JsonResponse([
                'success' => true,
                'city' => $data['name'],
                'country' => $data['sys']['country'] ?? '',
                'temp' => round($data['main']['temp']),
                'feels_like' => round($data['main']['feels_like']),
                'temp_min' => round($data['main']['temp_min']),
                'temp_max' => round($data['main']['temp_max']),
                'humidity' => $data['main']['humidity'],
                'pressure' => $data['main']['pressure'],
                'description' => ucfirst($data['weather'][0]['description']),
                'icon' => $data['weather'][0]['icon'],
                'wind_speed' => round($data['wind']['speed'] * 3.6, 1), // m/s to km/h
                'sunrise' => date('H:i', $data['sys']['sunrise']),
                'sunset' => date('H:i', $data['sys']['sunset']),
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Ville introuvable ou erreur API'
            ], 404);
        }
    }

    #[Route('/weather/forecast', name: 'weather_forecast', methods: ['GET'])]
    public function getForecast(Request $request): JsonResponse
    {
        $city = $request->query->get('city', 'Tunis');

        if (empty($this->apiKey)) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Clé API non configurée'
            ], 500);
        }

        try {
            // Prévisions sur 5 jours
            $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/forecast', [
                'query' => [
                    'q' => $city,
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                    'lang' => 'fr'
                ]
            ]);

            $data = $response->toArray();
            
            // Grouper par jour
            $forecast = [];
            foreach ($data['list'] as $item) {
                $date = date('Y-m-d', $item['dt']);
                $hour = date('H:i', $item['dt']);
                
                if (!isset($forecast[$date])) {
                    $forecast[$date] = [
                        'date' => $date,
                        'day' => $this->getDayName($item['dt']),
                        'temps' => []
                    ];
                }
                
                $forecast[$date]['temps'][] = [
                    'hour' => $hour,
                    'temp' => round($item['main']['temp']),
                    'description' => ucfirst($item['weather'][0]['description']),
                    'icon' => $item['weather'][0]['icon']
                ];
            }

            return new JsonResponse([
                'success' => true,
                'forecast' => array_values($forecast)
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => true,
                'message' => 'Erreur lors de la récupération des prévisions'
            ], 404);
        }
    }

    private function getDayName(int $timestamp): string
    {
        $days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        return $days[date('w', $timestamp)];
    }
}