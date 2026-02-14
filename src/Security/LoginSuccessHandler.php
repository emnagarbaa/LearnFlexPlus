<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        $user = $token->getUser();
        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles)) {
            return new RedirectResponse($this->router->generate('dashboard'));
        } elseif (in_array('ROLE_ENSEIGNANT', $roles)) {
            return new RedirectResponse($this->router->generate('app_back'));
        } elseif (in_array('ROLE_ETUDIANT', $roles)) {
            return new RedirectResponse($this->router->generate('app_etudiant_dashboard'));
        }

        return new RedirectResponse($this->router->generate('app_front'));
    }
}
