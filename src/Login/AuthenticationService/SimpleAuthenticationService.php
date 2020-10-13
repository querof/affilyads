<?php

declare(strict_types=1);

namespace Affilyadds\src\Login\AuthenticationService;

use Affilyadds\src\Login\NormalUser;
use Affilyadds\src\Login\User;
use InvalidArgumentException;

class SimpleAuthenticationService implements AuthenticationServiceInterface
{
    public function authenticate(User $user): bool
    {
        if (!($user instanceof NormalUser)) {
            throw new InvalidArgumentException('The user must be a Normal user');
        }

        // auth process
        return true;
    }
}
