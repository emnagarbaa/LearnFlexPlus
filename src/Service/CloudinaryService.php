<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CloudinaryService
{
    private $httpClient;
    private $cloudName;
    private $apiKey;
    private $apiSecret;

    public function __construct(HttpClientInterface $httpClient, string $cloudName, string $apiKey, string $apiSecret)
    {
        $this->httpClient = $httpClient;
        $this->cloudName = $cloudName;
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    public function upload(UploadedFile $file, string $folder = 'learnflex'): ?string
    {
        $timestamp = time();
        $params = [
            'folder' => $folder,
            'timestamp' => $timestamp,
        ];

        ksort($params);
        $paramString = "";
        foreach ($params as $key => $value) {
            $paramString .= $key . "=" . $value . "&";
        }
        $signature = sha1(rtrim($paramString, "&") . $this->apiSecret);

        $formData = [
            'file' => fopen($file->getRealPath(), 'r'),
            'api_key' => $this->apiKey,
            'timestamp' => $timestamp,
            'signature' => $signature,
            'folder' => $folder,
        ];

        try {
            $response = $this->httpClient->request('POST', "https://api.cloudinary.com/v1_1/{$this->cloudName}/image/upload", [
                'body' => $formData,
            ]);

            $result = $response->toArray();
            return $result['secure_url'] ?? null;
        }
        catch (\Exception $e) {
            return null;
        }
    }
}
