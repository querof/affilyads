<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

interface AirportRepositoryInterface
{
    /** @return AirportInterface[] */
    public function getAirports(): array;

    //rest of crud methods
}
