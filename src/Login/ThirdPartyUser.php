<?php

declare(strict_types=1);

namespace Affilyadds\src\Login;

class ThirdPartyUser extends User
{
    /** @var string */
    private $authSource = 'google';

    public function __construct(string $userName, string $authSource)
    {
        $this->userName = $userName;
        $this->authSource = $authSource;
    }
}
