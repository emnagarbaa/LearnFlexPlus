<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google_start')]
    public function connectGoogle(ClientRegistry $clientRegistry): RedirectResponse
    {
        // "google" must match your knpu_oauth2_client.yaml key
        return $clientRegistry
            ->getClient('google')
            ->redirect(['profile', 'email'], []); // scopes (NOT entity fields)
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(Request $request): RedirectResponse
    {
        // This route is handled by the authenticator.
        // If you reach here, it usually means the authenticator isn't configured yet.
        return $this->redirectToRoute('app_front');
    }
}
