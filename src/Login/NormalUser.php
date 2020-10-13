<?php

declare(strict_types=1);

namespace Affilyadds\src\Login;

class NormalUser extends User
{
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }
}
