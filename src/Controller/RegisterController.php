<?php
// src/Controller/RegisterController.php
namespace App\Controller;

use App\Entity\Users;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $em,
        MailerInterface $mailer,
        UserPasswordHasherInterface $passwordHasher,
        VerifyEmailHelperInterface $verifyEmailHelper,
        SluggerInterface $slugger
    ): Response {
        $user = new Users();
        $form = $this->createForm(UserType::class, $user, [
            'is_registration' => true,
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash password
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);

            $user->setIsVerified(false);

            /** @var UploadedFile|null $file */
            $file = $form->get('profileImageFile')->getData();

            if ($file) {
                $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeName = $slugger->slug($original);
                $newFilename = $safeName.'-'.uniqid().'.'.$file->guessExtension();

                $file->move($this->getParameter('kernel.project_dir').'/public/uploads/users', $newFilename);

                $user->setProfileImage($newFilename);   
            }

            $em->persist($user);
            $em->flush();


             // 3) Generate signed verification URL
            $signature = $verifyEmailHelper->generateSignature(
                'app_verify_email',              // route name
                (string) $user->getId(),         // user id
                (string) $user->getEmail(),      // user email
                ['id' => $user->getId()]         // route params
            );

            $verifyUrl = $signature->getSignedUrl();

            // 4) Send email (Gmail SMTP: from must be your Gmail)
            $emailMessage = (new Email())
                ->from(new Address('omar.jomni433@gmail.com', 'LearnFlexPlus'))
                ->to((string) $user->getEmail())
                ->subject('Vérifiez votre email - LearnFlexPlus')
                ->html("
                    <h2>Bienvenue sur LearnFlexPlus 👋</h2>
                    <p>Merci pour votre inscription.</p>
                    <p>Pour activer votre compte, cliquez sur ce lien :</p>
                    <p><a href='{$verifyUrl}'>Vérifier mon email</a></p>
                    <p>Si vous n'êtes pas à l'origine de cette inscription, ignorez cet email.</p>
                ");

            $mailer->send($emailMessage);

            $this->addFlash('success', 'Votre compte a été créé avec succès.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/register.html.twig', [
            'registrationForm' => $form->createView()
        ]);
    }
}
