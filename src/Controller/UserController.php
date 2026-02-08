<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\UsersRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Users;
use App\Form\UserType;

final class UserController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(Request $request, UsersRepository $usersRepository): Response
{
    $search = $request->query->get('search', ''); 
    $sort = $request->query->get('sort', 'id');
    $direction = $request->query->get('direction', 'asc');

    $direction = strtolower($direction) === 'desc' ? 'desc' : 'asc';

    $allowedSorts = ['id', 'nom', 'prenom', 'role'];
    if (!in_array($sort, $allowedSorts)) {
        $sort = 'id';
    }

    if ($search) {
        $users = $usersRepository->searchByKeyword($search, $sort, $direction);
    } else {
        $users = $usersRepository->findBy([], [$sort => $direction]);
    }

    return $this->render('user/index.html.twig', [
        'controller_name' => 'UserController',
        'users' => $users,
        'search' => $search,
        'direction' => $direction,
        'totalUsers' => count($users),
        
         'adminsCount'      => $usersRepository->count(['role' => 'admin']),
        'enseignantsCount' => $usersRepository->count(['role' => 'enseignant']),
        'etudiantsCount'   => $usersRepository->count(['role' => 'etudiant']),
    ]);
}


    #[Route('/adduser', name: 'app_adduser')]
    public function addUser(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $user = new Users();
        $form = $this->createForm(UserType::class, $user, ['is_registration' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash password
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));
            $user->setCreatedAt(new \DateTime());

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_users');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/edituser/{id}', name: 'app_edituser')]
    public function editUser($id, Request $request, UsersRepository $usersRepository, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $user = $usersRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException("Utilisateur introuvable pour l'id $id");
        }

        $form = $this->createForm(UserType::class, $user, ['is_registration' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setUpdatedAt(new \DateTime());
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_users');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
            'isEdit' => true,
        ]);
    }

    #[Route('/deleteuser/{id}', name: 'app_deleteuser')]
    public function deleteUser($id, UsersRepository $usersRepository, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $user = $usersRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException("Utilisateur introuvable pour l'id $id");
        }

        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('app_users');
    }

    #[Route('/users/pdf', name: 'app_users_pdf')]
public function generatePdf(Request $request, UsersRepository $usersRepository): Response
{
    // 1. Get users from DB (or whatever data you need)
    $users = $usersRepository->findAll();

    // 2. Render Twig template as HTML
    $html = $this->renderView('user/pdfuser.html.twig', [
        'users' => $users
    ]);

    // 3. Configure Dompdf
    $options = new Options();
    $options->set('defaultFont', 'Poppins');
    $dompdf = new Dompdf($options);

    // 4. Load HTML
    $dompdf->loadHtml($html);

    // 5. Setup page size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // 6. Render PDF
    $dompdf->render();

    // 7. Get PDF content
    $pdfContent = $dompdf->output();

    // 8. Return response
    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="users.pdf"',
    ]);
    }

}
