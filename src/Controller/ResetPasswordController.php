<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    #[Route('/reset-password', name: 'app_reset_password')]
    public function resetPassword(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        SessionInterface $session
    ): Response {
        $error = null;
        $success = null;
        $formData = [];

        // If user wants a new code
        if ($request->query->get('new_code')) {
            $session->remove('reset_password');
        }

        // STEP 1 or STEP 2 submission
        if ($request->isMethod('POST')) {

            /**
             * =========================
             * STEP 1 – SEND CODE
             * =========================
             */
            if (!$session->has('reset_password')) {
                $email = trim($request->request->get('email'));

                if (empty($email)) {
                    $error = 'Veuillez entrer votre email.';
                } else {
                    $user = $em->getRepository(Users::class)->findOneBy(['email' => $email]);

                    if (!$user) {
                        $error = 'Aucun compte trouvé avec cet email.';
                    } else {
                        // Generate 6-digit code
                        $code = random_int(100000, 999999);

                        // Store in session
                        $session->set('reset_password', [
                            'email' => $email,
                            'code' => $code,
                            'created_at' => time(),
                        ]);

                        // ⚠️ Here you would send email (Mailer)
                        // For now we simulate success
                        $success = 'Un code de vérification a été envoyé à votre email.';
                    }
                }
            }

            /**
             * =========================
             * STEP 2 – VERIFY & RESET
             * =========================
             */
            else {
                $data = $session->get('reset_password');

                $verificationCode = $request->request->get('verification_code');
                $newPassword = $request->request->get('new_password');
                $confirmPassword = $request->request->get('confirm_password');

                if (
                    empty($verificationCode) ||
                    empty($newPassword) ||
                    empty($confirmPassword)
                ) {
                    $error = 'Veuillez remplir tous les champs.';
                } elseif ($verificationCode != $data['code']) {
                    $error = 'Code de vérification incorrect.';
                } elseif ($newPassword !== $confirmPassword) {
                    $error = 'Les mots de passe ne correspondent pas.';
                } elseif (strlen($newPassword) < 8) {
                    $error = 'Le mot de passe doit contenir au moins 8 caractères.';
                } else {
                    $user = $em->getRepository(Users::class)
                        ->findOneBy(['email' => $data['email']]);

                    if (!$user) {
                        $error = 'Utilisateur introuvable.';
                    } else {
                        // Hash new password
                        //$hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
                        //$user->setPassword($hashedPassword);

                        $em->flush();

                        // Clear session
                        $session->remove('reset_password');

                        $success = 'Mot de passe réinitialisé avec succès.';
                    }
                }
            }
        }

        return $this->render('login/forgetpassword.html.twig', [
            'error' => $error,
            'success' => $success,
            'form' => $formData,
        ]);
    }
}
