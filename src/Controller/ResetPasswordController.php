<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
<<<<<<< HEAD
=======
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
>>>>>>> origin/user
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    #[Route('/reset-password', name: 'app_reset_password')]
    public function resetPassword(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
<<<<<<< HEAD
        SessionInterface $session
    ): Response {
        $error = null;
        $success = null;
=======
        SessionInterface $session,
        MailerInterface $mailer
    ): Response {
>>>>>>> origin/user
        $formData = [];

        // If user wants a new code
        if ($request->query->get('new_code')) {
            $session->remove('reset_password');
<<<<<<< HEAD
        }

        // STEP 1 or STEP 2 submission
=======
            $this->addFlash('success', 'Un nouveau code va être généré. Entrez votre email.');
            return $this->redirectToRoute('app_reset_password');
        }

>>>>>>> origin/user
        if ($request->isMethod('POST')) {

            /**
             * =========================
             * STEP 1 – SEND CODE
             * =========================
             */
            if (!$session->has('reset_password')) {
<<<<<<< HEAD
                $email = trim($request->request->get('email'));

                if (empty($email)) {
                    $error = 'Veuillez entrer votre email.';
=======
                $email = trim((string) $request->request->get('email'));
                $formData['email'] = $email;

                if ($email === '') {
                    $this->addFlash('error', 'Veuillez entrer votre email.');
>>>>>>> origin/user
                } else {
                    $user = $em->getRepository(Users::class)->findOneBy(['email' => $email]);

                    if (!$user) {
<<<<<<< HEAD
                        $error = 'Aucun compte trouvé avec cet email.';
                    } else {
                        // Generate 6-digit code
                        $code = random_int(100000, 999999);
=======
                        $this->addFlash('error', 'Aucun compte trouvé avec cet email.');
                    } else {
                        // Generate 6-digit code
                        $code = (string) random_int(100000, 999999);
>>>>>>> origin/user

                        // Store in session
                        $session->set('reset_password', [
                            'email' => $email,
                            'code' => $code,
                            'created_at' => time(),
                        ]);

<<<<<<< HEAD
                        // ⚠️ Here you would send email (Mailer)
                        // For now we simulate success
                        $success = 'Un code de vérification a été envoyé à votre email.';
=======
                        // ✅ SEND EMAIL
                        try {
                            $message = (new Email())
                                ->from(new Address('omar.jomni433@gmail.com', 'LearnFlexPlus'))
                                ->to($email)
                                ->subject('Votre code de réinitialisation LearnFlexPlus')
                                ->text("Votre code de vérification est : $code\n\nCe code expire dans 10 minutes.")
                                ->html("
                                    <h2>Réinitialisation de mot de passe</h2>
                                    <p>Votre code de vérification est :</p>
                                    <p style='font-size:24px;letter-spacing:6px;'><b>$code</b></p>
                                    <p>Ce code expire dans <b>10 minutes</b>.</p>
                                ");

                            $mailer->send($message);

                            $this->addFlash('success', 'Un code de vérification a été envoyé à votre email.');
                            return $this->redirectToRoute('app_reset_password');
                        } catch (\Throwable $e) {
                            // If mail fails, remove session so user doesn't get stuck in step 2
                            $session->remove('reset_password');
                            $this->addFlash('error', "Erreur d'envoi d'email : " . $e->getMessage());
                        }
>>>>>>> origin/user
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

<<<<<<< HEAD
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
=======
                // Expire code after 10 minutes (600s)
                if (!isset($data['created_at']) || time() - (int) $data['created_at'] > 600) {
                    $session->remove('reset_password');
                    $this->addFlash('error', 'Le code a expiré. Veuillez en demander un nouveau.');
                    return $this->redirectToRoute('app_reset_password');
                }

                $verificationCode = trim((string) $request->request->get('verification_code'));
                $newPassword = (string) $request->request->get('new_password');
                $confirmPassword = (string) $request->request->get('confirm_password');

                if ($verificationCode === '' || $newPassword === '' || $confirmPassword === '') {
                    $this->addFlash('error', 'Veuillez remplir tous les champs.');
                } elseif ($verificationCode !== (string) $data['code']) {
                    $this->addFlash('error', 'Code de vérification incorrect.');
                } elseif ($newPassword !== $confirmPassword) {
                    $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                } elseif (strlen($newPassword) < 8) {
                    $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
                } else {
                    $user = $em->getRepository(Users::class)->findOneBy(['email' => $data['email']]);

                    if (!$user) {
                        $this->addFlash('error', 'Utilisateur introuvable.');
                    } else {
                        // Hash + save password
                        $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
                        $user->setPassword($hashedPassword);
                        $em->flush();

                        // Clear session reset state
                        $session->remove('reset_password');

                        $this->addFlash('success', 'Mot de passe réinitialisé avec succès.');
                        return $this->redirectToRoute('app_login');
>>>>>>> origin/user
                    }
                }
            }
        }

        return $this->render('login/forgetpassword.html.twig', [
<<<<<<< HEAD
            'error' => $error,
            'success' => $success,
=======
>>>>>>> origin/user
            'form' => $formData,
        ]);
    }
}
