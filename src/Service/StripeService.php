<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeService
{
    private $secretKey;
    private $logger;

    public function __construct(string $secretKey, LoggerInterface $logger)
    {
        $this->secretKey = $secretKey;
        $this->logger = $logger;
        // Set the global API key for the SDK
        Stripe::setApiKey($this->secretKey);
    }

    public function createCheckoutSession(string $courseTitle, float $price, string $successUrl, string $cancelUrl): ?array
    {
        try {
            // For USD, Stripe expects the amount in cents (2 decimals for USD)
            $unitAmount = (int)round($price * 100);

            $this->logger->info("Creating Stripe SDK session for $courseTitle, Price: $price ($unitAmount cents)");

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $courseTitle,
                            ],
                            'unit_amount' => $unitAmount,
                        ],
                        'quantity' => 1,
                    ]],
                'mode' => 'payment',
                'success_url' => $successUrl,
                'cancel_url' => $cancelUrl,
            ]);

            return [
                'id' => $session->id,
                'url' => $session->url,
            ];
        }
        catch (\Exception $e) {
            $this->logger->error('Stripe SDK Exception: ' . $e->getMessage());
            return null;
        }
    }
}
