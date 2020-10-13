<?php

declare(strict_types=1);

namespace Affilyadds\src\Login;

class User
{
    /** @var string */
    protected $userName;

    public function getUserName(): string
    {
        return $this->userName;
    }
}
