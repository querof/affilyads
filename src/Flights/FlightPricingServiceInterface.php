<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights;

use Affilyadds\src\Flights\Repositories\Flight;
use Affilyadds\src\Flights\Repositories\UserInterface;

interface FlightPricingServiceInterface
{
    public function getFlightCost(Flight $flight, UserInterface $user): float;
}
