<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Repository\UsersRepository;

class FaceController extends AbstractController
{
    private const PYTHON_EXE = 'C:/Users/JOMNI/AppData/Local/Programs/Python/Python314/python.exe';
    private const FACES_DIR  = 'C:/xampp/htdocs/faces';

    private function cascadePath(): string
    {
        return realpath(__DIR__ . '/../../public/opencv/haarcascade_frontalface_alt.xml');
    }

    private function scriptPath(): string
    {
        return realpath(__DIR__ . '/../../public/script/face_compare.py');
    }


    #[Route('/face-auth', name: 'face_auth', methods: ['POST'])]
    public function authenticateWithFace(
        Request              $request,
        UsersRepository      $userRepository,
        TokenStorageInterface $tokenStorage
    ): JsonResponse {

        $data = json_decode($request->getContent(), true);
        if (!isset($data['image'])) {
            return new JsonResponse(['error' => 'No image provided.'], 400);
        }

        $imageData    = preg_replace('/^data:image\/(png|jpeg);base64,/', '', $data['image']);
        $imageData    = str_replace(' ', '+', $imageData);
        $decodedImage = base64_decode($imageData, true);

        if ($decodedImage === false) {
            return new JsonResponse(['error' => 'Failed to decode image.'], 400);
        }

        $liveCapturePath = sys_get_temp_dir() . '/live_face_' . uniqid() . '.png';
        if (!file_put_contents($liveCapturePath, $decodedImage)) {
            return new JsonResponse(['error' => 'Failed to save temp image.'], 500);
        }

        try {
            $cascadePath = $this->cascadePath();
            $scriptPath  = $this->scriptPath();

            if (!is_dir(self::FACES_DIR)) {
                return new JsonResponse(['error' => 'Faces directory not found: ' . self::FACES_DIR], 500);
            }
            if (!$cascadePath) {
                return new JsonResponse(['error' => 'Cascade file not found.'], 500);
            }
            if (!$scriptPath) {
                return new JsonResponse(['error' => 'Python script not found.'], 500);
            }
            if (!file_exists(self::PYTHON_EXE)) {
                return new JsonResponse(['error' => 'Python not found: ' . self::PYTHON_EXE], 500);
            }

            $matchedEmail = $this->runFaceCompare(
                self::FACES_DIR,
                $liveCapturePath,
                $cascadePath,
                $scriptPath
            );

            if (!$matchedEmail) {
                return new JsonResponse(['error' => 'No matching face found.'], 403);
            }

            $user = $userRepository->findOneBy(['email' => $matchedEmail]);
            if (!$user) {
                return new JsonResponse(['error' => 'No account found for this face.'], 404);
            }


            $token = new UsernamePasswordToken($user, 'main', $user->getRoles());

            $tokenStorage->setToken($token);

            $request->getSession()->set('_security_main', serialize($token));

            return new JsonResponse([
                'success'     => true,
                'redirectUrl' => $this->generateUrl('app_front'),
            ]);
        } finally {
            if (file_exists($liveCapturePath)) {
                @unlink($liveCapturePath);
            }
        }
    }

    // ================================================================
    //  Runs face_compare.py → returns matched email or null
    // ================================================================
    private function runFaceCompare(
        string $facesDir,
        string $liveImagePath,
        string $cascadePath,
        string $scriptPath
    ): ?string {
        $command = sprintf(
            '%s %s %s %s %s',
            escapeshellarg(self::PYTHON_EXE),
            escapeshellarg($scriptPath),
            escapeshellarg($facesDir),
            escapeshellarg($liveImagePath),
            escapeshellarg($cascadePath)
        );

        $output    = [];
        $returnVar = 0;
        exec($command . ' 2>&1', $output, $returnVar);

        error_log('DEBUG: Command     : ' . $command);
        error_log('DEBUG: Return code : ' . $returnVar);
        error_log('DEBUG: Output      : ' . implode("\n", $output));

        if ($returnVar !== 0) {
            error_log('ERROR: Python script failed with code ' . $returnVar);
            return null;
        }

        $matched = trim(implode('', $output));
        return $matched !== '' ? $matched : null;
    }

    // ================================================================
    //  POST /upload-face
    // ================================================================
    #[Route('/upload-face', name: 'app_upload_face', methods: ['POST'])]
    public function uploadFace(Request $request): Response
    {
        $email     = $request->request->get('email');
        $imageData = $request->request->get('image');

        if (!$email || !$imageData) {
            return new JsonResponse(['message' => 'Missing email or image.'], 400);
        }

        $imageData    = preg_replace('/^data:image\/(png|jpeg);base64,/', '', $imageData);
        $imageData    = str_replace(' ', '+', $imageData);
        $decodedImage = base64_decode($imageData, true);

        if ($decodedImage === false) {
            return new JsonResponse(['message' => 'Failed to decode image.'], 400);
        }

        $saveDir = self::FACES_DIR;
        if (!is_dir($saveDir)) {
            mkdir($saveDir, 0777, true);
        }
        if (!is_writable($saveDir)) {
            return new JsonResponse(['message' => 'Cannot write to faces directory.'], 500);
        }

        $safeEmail = preg_replace('/[^a-zA-Z0-9\-_\.]/', '@', $email);
        $filename  = $saveDir . '/' . $safeEmail . '.png';

        if (!file_put_contents($filename, $decodedImage)) {
            return new JsonResponse(['message' => 'Failed to save face image.'], 500);
        }

        return new JsonResponse(['message' => 'Face registered successfully.'], 200);
    }
}
