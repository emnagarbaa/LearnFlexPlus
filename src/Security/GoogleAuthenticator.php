<?php

namespace App\Security;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GoogleAuthenticator extends OAuth2Authenticator
{
    public function __construct(
        private ClientRegistry $clientRegistry,
        private EntityManagerInterface $em,
        private RouterInterface $router,
        private HttpClientInterface $httpClient,
        private \Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface $params, // injecté via services.yaml
    ) {}

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->clientRegistry->getClient('google');
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge('google_user', function () use ($client, $accessToken) {
                /** @var GoogleUser $googleUser */
                $googleUser = $client->fetchUserFromToken($accessToken);

                $email = $googleUser->getEmail();
                if (!$email) {
                    throw new AuthenticationException('Email Google introuvable.');
                }

                $repo = $this->em->getRepository(Users::class);
                /** @var Users|null $user */
                $user = $repo->findOneBy(['email' => $email]);

                if (!$user) {
                    // ✅ création auto si l’utilisateur n’existe pas
                    $user = new Users();
                    $user->setEmail($email);

                    // Google donne souvent "name" => "Prenom Nom"
                    $fullName = trim((string) $googleUser->getName());
                    if ($fullName !== '') {
                        $parts = preg_split('/\s+/', $fullName);
                        $prenom = $parts[0] ?? '';
                        $nom = count($parts) > 1 ? implode(' ', array_slice($parts, 1)) : '';
                        if ($prenom !== '') $user->setPrenom($prenom);
                        if ($nom !== '') $user->setNom($nom);
                    }

                    // rôle par défaut
                    $user->setRole('Etudiant');
                    $user->setIsVerified(true);

                    // mot de passe “dummy” (car login OAuth)
                    $user->setPassword(bin2hex(random_bytes(16)));

                    $this->em->persist($user);
                }

                // ✅ Télécharger la photo si elle existe + si pas déjà définie
                $pictureUrl = method_exists($googleUser, 'getAvatar') ? $googleUser->getAvatar() : null;
                if ($pictureUrl && !$user->getProfileImage()) {
                    $filename = $this->downloadGoogleAvatar($pictureUrl);
                    if ($filename) {
                        $user->setProfileImage($filename);
                    }
                }

                $this->em->flush();
                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?Response
    {
        return new RedirectResponse($this->router->generate('app_front'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new RedirectResponse($this->router->generate('app_login'));
    }

    private function downloadGoogleAvatar(string $url): ?string
    {
        try {
            // option : augmenter la taille de l’image
            $url = preg_replace('/=s\d+-c$/', '=s256-c', $url);

            $response = $this->httpClient->request('GET', $url);
            if (200 !== $response->getStatusCode()) {
                return null;
            }

            $contentType = $response->getHeaders(false)['content-type'][0] ?? 'image/jpeg';
            $ext = match (true) {
                str_contains($contentType, 'png') => 'png',
                str_contains($contentType, 'webp') => 'webp',
                default => 'jpg',
            };

            $filename = md5(uniqid('', true)) . '.' . $ext;
            $targetDir = $this->params->get('kernel.project_dir') . '/public/uploads/users';

            if (!is_dir($targetDir)) {
                @mkdir($targetDir, 0775, true);
            }

            file_put_contents($targetDir . '/' . $filename, $response->getContent());

            return $filename;
        } catch (\Throwable $e) {
            return null;
        }
    }
}
