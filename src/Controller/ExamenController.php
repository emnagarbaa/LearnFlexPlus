<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Examen;
use App\Form\ExamenType;
use App\Repository\CommentaireRepository;
use App\Repository\ExamenRepository;
use App\Repository\ReponseExamenRepository;
use App\Service\GptOssService;
use App\Service\PdfService;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Snappy\Pdf;
use App\Entity\CheatLog;

final class ExamenController extends AbstractController
{
    #[Route('/examen', name: 'app_examen')]
    public function index(): Response
    {
        return $this->render('examen/index.html.twig', [
            'controller_name' => 'ExamenController',
        ]);
    }

    #[Route('/back/examen', name: 'admin_examen')]
    public function afficher(ExamenRepository $examenRepository): Response
    {
        $examens = $examenRepository->findAll();

        return $this->render('examen/afficher.html.twig', [
            'examens' => $examens,
        ]);
    }

    #[Route('/addformexamen', name: 'app_addformexamen')]
    public function addformexamen(
        Request $req,
        ExamenRepository $examenrep,
        ManagerRegistry $m,
        SluggerInterface $slugger
    ): Response {
        $em = $m->getManager();
        $examen = new Examen();

        $form = $this->createForm(ExamenType::class, $examen);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pdfFile->guessExtension();

                try {
                    $pdfFile->move(
                        $this->getParameter('exams_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // gérer l'erreur si besoin
                }

                $examen->setPdf($newFilename);
            }

            $em->persist($examen);
            $em->flush();

            return $this->redirectToRoute('admin_examen');
        }

        return $this->render('examen/new.html.twig', [
            'form'   => $form->createView(),
            'isEdit' => false,
        ]);
    }

    #[Route('/editexamen/{id}', name: 'app_editexamen')]
    public function editexamen(
        $id,
        Request $req,
        ExamenRepository $examenrep,
        ManagerRegistry $m
    ): Response {
        $em = $m->getManager();
        $a = $examenrep->find($id);

        $form = $this->createForm(ExamenType::class, $a);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdfFile = $form->get('pdfFile')->getData();

            if ($pdfFile) {
                $newFilename = uniqid() . '.' . $pdfFile->guessExtension();
                $pdfFile->move(
                    $this->getParameter('exams_directory'),
                    $newFilename
                );
                $a->setPdf($newFilename);
            }

            $em->persist($a);
            $em->flush();

            return $this->redirectToRoute('admin_examen');
        }

        return $this->render('examen/new.html.twig', [
            'form'   => $form,
            'isEdit' => true,
        ]);
    }

    #[Route('/deleteexamen/{id}', name: 'app_deleteexamen')]
    public function deleteexamen($id, ExamenRepository $examenrep, ManagerRegistry $m): Response
    {
        $em = $m->getManager();
        $examen = $examenrep->find($id);

        if (!$examen) {
            throw $this->createNotFoundException("Examen introuvable pour l'id $id");
        }

        $em->remove($examen);
        $em->flush();

        return $this->redirectToRoute('admin_examen');
    }

    #[Route('/rechercheexamen', name: 'app_examen_list')]
    public function rechercheExamen(Request $request, ExamenRepository $examenRepo): Response
    {
        $search = $request->query->get('search');
        $niveau = $request->query->get('niveau');

        $qb = $examenRepo->createQueryBuilder('e');

        if ($search) {
            $qb->andWhere('LOWER(e.titre) LIKE :kw OR LOWER(e.description) LIKE :kw OR LOWER(e.matiere) LIKE :kw')
                ->setParameter('kw', '%' . strtolower($search) . '%');
        }

        if ($niveau) {
            $qb->andWhere('e.niveauexamen = :niveau')
                ->setParameter('niveau', $niveau);
        }

        $qb->orderBy('e.titre', 'ASC');
        $examens = $qb->getQuery()->getResult();

        return $this->render('examen/afficher.html.twig', [
            'examens'            => $examens,
            'search'             => $search,
            'niveau_selectionne' => $niveau,
        ]);
    }
    #[Route('/trieexamen', name: 'app_trieexamen_list')]
    public function trieexamen(Request $request, ExamenRepository $repo): Response
    {
        $niveau = $request->query->get('niveau');

        if ($niveau) {
            $examens = $repo->findBy(['niveauexamen' => $niveau]);
        } else {
            $examens = $repo->findAll();
        }

        return $this->render('examen/afficher.html.twig', [
            'examens'            => $examens,
            'niveau_selectionne' => $niveau,
        ]);
    }

    #[Route('/examen/by-niveau/{niveau}', name: 'app_examen_by_niveau', methods: ['GET'])]
    public function getExamenByNiveau(string $niveau, ExamenRepository $examenRepo): JsonResponse
    {
        $examen = $examenRepo->findOneBy(['niveauexamen' => $niveau, 'etat' => 'actif']);

        if (!$examen) {
            return new JsonResponse(['status' => 'error', 'message' => 'Examen introuvable'], 404);
        }

        return new JsonResponse([
            'status'      => 'success',
            'examenId'    => $examen->getId(),
            'titre'       => $examen->getTitre(),
            'description' => $examen->getDescription(),
        ]);
    }

    #[Route('/examen/{id}/{niveau?}', name: 'front_examen')]
    public function show(Examen $examen): Response
    {
        $challenges = $examen->getChallenges();

        return $this->render('front/examen.html.twig', [
            'examen'      => $examen,
            'challenges'  => $challenges,
            // si tu utilises des commentaires dans ce template :
            // 'commentaires' => ...
        ]);
    }

    #[Route('/exam/download/{filename}', name: 'exam_download')]
    public function downloadExam(string $filename)
    {
        $file = $this->getParameter('kernel.project_dir') . '/public/assets/exams/' . $filename;

        return $this->file($file, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }

    #[Route('/examen/{id}/add-comment', name: 'examen_add_comment', methods: ['POST'])]
    public function addComment(Request $request, Examen $examen, EntityManagerInterface $em)
    {
        $author = $request->request->get('author', 'Anonyme');
        $text = $request->request->get('comment', '');

        if (!$text) {
            return new JsonResponse(['status' => 'error', 'message' => 'Commentaire vide']);
        }

        $comment = new Commentaire();
        $comment->setAuteur($author);
        $comment->setContenu($text);
        $comment->setExamen($examen);
        $comment->setNbvue(0);
        $comment->setLikes(0);

        $em->persist($comment);
        $em->flush();

        return new JsonResponse([
            'status'  => 'success',
            'id'      => $comment->getId(),
            'author'  => $comment->getAuteur(),
            'contenu' => $comment->getContenu(),
            'nbvue'   => $comment->getNbvue(),
            'likes'   => $comment->getLikes(),
        ]);
    }

    #[Route('/commentaire/{id}/like', name: 'comment_like', methods: ['POST'])]
    public function like(Commentaire $comment, EntityManagerInterface $em)
    {
        $comment->setLikes($comment->getLikes() + 1);
        $em->flush();

        return new JsonResponse(['status' => 'success', 'likes' => $comment->getLikes()]);
    }

    #[Route('/examen/{id}/reponses', name: 'examen_reponses', methods: ['GET'])]
    public function reponses(int $id, ReponseExamenRepository $repo): JsonResponse
    {
        $reponses = $repo->findBy(['examen' => $id], ['dateSoumission' => 'DESC']);

        $lastByEtudiant = [];

        foreach ($reponses as $r) {
            $etudiantId = $r->getEtudiant()?->getId() ?? 0;

            if (!isset($lastByEtudiant[$etudiantId])) {
                $lastByEtudiant[$etudiantId] = [
                    'etudiant' => $r->getEtudiant()?->getNom() ?? 'Anonyme',
                    'date'     => $r->getDateSoumission()?->format('d/m/Y H:i') ?? '',
                    'reponses' => [],
                ];
            }

            if (!str_starts_with($r->getQuestion(), '_token')) {
                $lastByEtudiant[$etudiantId]['reponses'][$r->getQuestion()] = $r->getReponse();
            }
        }

        $data = array_values($lastByEtudiant);

        return $this->json($data);
    }
// ✅ après — URL unique sans conflit
#[Route('/examen/{id}/voir-pdf', name: 'examen_pdf')]
public function pdf(Examen $examen): Response
{
    if ($examen->getPdf()) {
        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/assets/exams/' . $examen->getPdf();
        if (file_exists($pdfPath)) {
            return new BinaryFileResponse($pdfPath, 200, [
                'Content-Disposition' => 'attachment; filename="' . $examen->getPdf() . '"',
            ]);
        }
    }

    $html = $this->renderView('examen/pdf.html.twig', ['examen' => $examen]);
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return new Response($dompdf->output(), 200, [
        'Content-Type'        => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Examen_' . $examen->getTitre() . '.pdf"',
    ]);
}
    #[Route('/examen/{id}/pdf', name: 'generate_examen_pdf')]
    public function generatePdf(Examen $examen, PdfService $pdfService): Response
    {
        $etudiant = $this->getUser();

        return $pdfService->generateExamenPdf($examen, $etudiant);
    }

   #[Route('/examen/{id}/stats', name: 'app_examen_stats')]
public function stats(Examen $examen, ExamenRepository $repo): Response
{
    $examens = $repo->findAll();

    // Stats par état
    $parEtat = [];
    // Stats par matière
    $parMatiere = [];
    // Stats durée par matière
    $dureeParMatiere = [];
    $countParMatiere = [];

    foreach ($examens as $e) {
        // Par état
        $etat = $e->getEtat() ?? 'Inconnu';
        $parEtat[$etat] = ($parEtat[$etat] ?? 0) + 1;

        // Par matière
        $mat = $e->getMatiere() ?? 'Inconnu';
        $parMatiere[$mat] = ($parMatiere[$mat] ?? 0) + 1;

        // Durée par matière
        $dureeParMatiere[$mat] = ($dureeParMatiere[$mat] ?? 0) + $e->getDuree();
        $countParMatiere[$mat] = ($countParMatiere[$mat] ?? 0) + 1;
    }

    // Durée moyenne
    $dureeMoyenne = [];
    foreach ($dureeParMatiere as $mat => $total) {
        $dureeMoyenne[$mat] = round($total / $countParMatiere[$mat]);
    }

    return $this->render('examen/stats_modal.html.twig', [
        'parEtat'       => $parEtat,
        'parMatiere'    => $parMatiere,
        'dureeMoyenne'  => $dureeMoyenne,
        'examen'        => $examen,
        'totalExamens'  => count($examens),
    ]);
}
    #[Route('/examen/analyze-answer', name: 'analyze_answer', methods: ['POST'])]
    public function analyzeAnswer(Request $request, GptOssService $gptOssService): JsonResponse
    {
        $answer = $request->request->get('answer');

        if (!$answer) {
            return $this->json([
                'success' => false,
                'message' => 'Aucune réponse fournie',
            ], 400);
        }

        $analysis = $gptOssService->analyzeAnswer($answer);

        return $this->json([
            'success'  => true,
            'analysis' => $analysis,
        ]);
    }
    #[Route('/examen/{id}/cheat', name: 'examen_cheat_report', methods: ['POST'])]
public function reportCheat(Examen $examen, Request $request, EntityManagerInterface $em): JsonResponse
{
    $type  = $request->request->get('type');
    $count = (int) $request->request->get('count');
    $user  = $this->getUser();

    // Logguer en base (créez une entité CheatLog ou loggez dans un fichier)
    $log = new CheatLog();
    $log->setExamen($examen);
    $log->setEtudiant($user);
    $log->setType($type);
    $log->setCount($count);
    $log->setCreatedAt(new \DateTime());

    $em->persist($log);
    $em->flush();

    return new JsonResponse(['success' => true]);
}
#[Route('/examen/{id}/rapport-pdf', name: 'examen_rapport_pdf')]
public function rapportPdf(
    Examen $examen,
    EntityManagerInterface $em,
    Pdf $pdf
): Response {
    // Récupérer les réponses des étudiants
    $reponses = $examen->getReponseExamens();

    // Récupérer les commentaires
    $commentaires = $examen->getCommentaires();

    // Récupérer les logs anti-triche
    $cheatLogs = $em->getRepository(CheatLog::class)->findBy(
        ['examen' => $examen],
        ['createdAt' => 'DESC']
    );

    // Stats réponses par étudiant
    $statsEtudiants = [];
    foreach ($reponses as $r) {
        $nom = $r->getEtudiant()?->getNom() ?? 'Anonyme';
        if (!isset($statsEtudiants[$nom])) {
            $statsEtudiants[$nom] = [
                'nom'      => $nom,
                'nbRep'    => 0,
                'derniere' => null,
            ];
        }
        $statsEtudiants[$nom]['nbRep']++;
        $statsEtudiants[$nom]['derniere'] = $r->getDateSoumission();
    }

    // Stats infractions
    $infractionsParType = [];
    foreach ($cheatLogs as $log) {
        $type = $log->getType();
        $infractionsParType[$type] = ($infractionsParType[$type] ?? 0) + 1;
    }
$logoPath = $this->getParameter('kernel.project_dir') . '/public/assets/images/logo1.png';
$logoBase64 = file_exists($logoPath) ? base64_encode(file_get_contents($logoPath)) : '';
    $html = $this->renderView('examen/rapport_pdf.html.twig', [
        'examen'             => $examen,
        'statsEtudiants'     => array_values($statsEtudiants),
        'commentaires'       => $commentaires,
        'infractionsParType' => $infractionsParType,
        'cheatLogs'          => $cheatLogs,
        'dateGeneration'     => new \DateTime(),
        'logoBase64'         => $logoBase64,
    ]);

    $content = $pdf->getOutputFromHtml($html, [
        'page-size'           => 'A4',
        'orientation'         => 'Portrait',
        'margin-top'          => '15',
        'margin-bottom'       => '15',
        'margin-left'         => '15',
        'margin-right'        => '15',
        'encoding'            => 'UTF-8',
        'enable-local-file-access' => true,
    ]);

    return new Response($content, 200, [
        'Content-Type'        => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Rapport_' . $examen->getTitre() . '.pdf"',
    ]);
}
}