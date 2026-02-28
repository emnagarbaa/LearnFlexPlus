<?php

namespace App\Controller\Etudiant;

use App\Entity\Cours;
use App\Service\StripeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/etudiant/payment')]
class PaymentController extends AbstractController
{
    #[Route('/create-session/{id}', name: 'app_etudiant_payment_create_session', methods: ['POST', 'GET'])]
    public function createSession(Cours $cours, StripeService $stripeService): Response
    {
        $successUrl = $this->generateUrl('app_etudiant_payment_success', ['id' => $cours->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        $cancelUrl = $this->generateUrl('app_etudiant_payment_cancel', ['id' => $cours->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        $session = $stripeService->createCheckoutSession(
            $cours->getTitre(),
            (float)$cours->getPrix(),
            $successUrl,
            $cancelUrl
        );

        if (!$session) {
            $this->addFlash('error', 'Impossible de contacter Stripe. Vérifiez vos clés API.');
            return $this->redirectToRoute('app_etudiant_cours_list', ['id' => $cours->getMatiere()->getId()]);
        }

        return $this->redirect($session['url']);
    }

    #[Route('/success/{id}', name: 'app_etudiant_payment_success')]
    public function success(Cours $cours): Response
    {
        return $this->render('etudiant/payment/success.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/cancel/{id}', name: 'app_etudiant_payment_cancel')]
    public function cancel(Cours $cours): Response
    {
        $this->addFlash('warning', 'Paiement annulé.');
        return $this->redirectToRoute('app_etudiant_cours_list', ['id' => $cours->getMatiere()->getId()]);
    }
}
