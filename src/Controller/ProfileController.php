<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        /** @var Users|null $user */
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newPassword = (string) $form->get('newPassword')->getData();
            $confirmPassword = (string) $form->get('confirmPassword')->getData();

            // Password change only if filled
            if ($newPassword !== '' || $confirmPassword !== '') {
                if ($newPassword === '' || $confirmPassword === '') {
                    $this->addFlash('error', 'Veuillez remplir les deux champs de mot de passe.');
                    return $this->redirectToRoute('app_profile');
                }
                if ($newPassword !== $confirmPassword) {
                    $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                    return $this->redirectToRoute('app_profile');
                }
                if (strlen($newPassword) < 8) {
                    $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
                    return $this->redirectToRoute('app_profile');
                }

                $user->setPassword($passwordHasher->hashPassword($user, $newPassword));
            }

            /** @var UploadedFile|null $file */
            $file = $form->get('profileImageFile')->getData();

            if ($file) {
                // supprimer ancienne image si existe
                $old = $user->getProfileImage();
                if ($old) {
                    $oldPath = $this->getParameter('kernel.project_dir').'/public/uploads/users/'.$old;
                    if (is_file($oldPath)) {
                        @unlink($oldPath);
                    }
                }

                $original = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeName = $slugger->slug($original);
                $newFilename = $safeName.'-'.uniqid().'.'.$file->guessExtension();

                $file->move($this->getParameter('kernel.project_dir').'/public/uploads/users', $newFilename);

                $user->setProfileImage($newFilename);
            }


            $em->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('User/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}
