<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class BackController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function index(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
    #[Route('/test-email', name: 'test_email')]
public function testEmail(MailerInterface $mailer)
{
    $email = (new Email())
        ->from('emnagarbaa200@gmail.com')
        ->to('emnagarbaa200@gmail.com') // ton email de test
        ->subject('Test Symfony Mailer')
        ->text('Salut ! Ça marche, Symfony peut envoyer un email !');

    $mailer->send($email);

    return new Response('Email envoyé !');
}
}
