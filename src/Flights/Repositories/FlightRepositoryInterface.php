<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

interface FlightRepositoryInterface
{
    /** @return Flight[] */
    public function getFlights(): array;
}
