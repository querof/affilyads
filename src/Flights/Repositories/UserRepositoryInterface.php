<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

interface UserRepositoryInterface
{
    /** @return UserInterface[] */
    public function getUsers(): array;

    //rest of crud methods
}
