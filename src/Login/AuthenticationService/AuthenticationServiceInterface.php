<?php

declare(strict_types=1);

namespace Affilyadds\src\Login\AuthenticationService;

use Affilyadds\src\Login\User;

interface AuthenticationServiceInterface
{
    public function authenticate(User $user): bool;

}
