<?php

declare(strict_types=1);

namespace Affilyadds\src\Login;

use Affilyadds\src\Login\AuthenticationService\AuthenticationServiceInterface;

class LoginModule
{
    /** @var AuthenticationServiceInterface */
    private $authenticationService;

    public function __construct(AuthenticationServiceInterface $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function login(User $user): void
    {
        if (!$this->authenticationService->authenticate($user)) {
            throw new UnableToAuthenticateUserException("User can't be authenticated");
        }

        //redirect or other actions
    }
}
