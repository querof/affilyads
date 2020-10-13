<?php

declare(strict_types=1);

namespace Affilyadds\src\Login\AuthenticationService;

use Affilyadds\src\Login\ThirdPartyUser;
use Affilyadds\src\Login\User;
use InvalidArgumentException;

class GoogleAuthService implements AuthenticationServiceInterface
{
    public function authenticate(User $user): bool
    {
        if (!($user instanceof ThirdPartyUser)) {
            throw new InvalidArgumentException('The user must have a ThirdPartyUser');
        }

        // auth process
        return true;
    }
}
