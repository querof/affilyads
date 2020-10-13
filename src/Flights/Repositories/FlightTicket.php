<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

class FlightTicket
{
    /** @var UserInterface */
    private $passenger;

    /** @var Flight */
    private $flight;

    public function __construct(UserInterface $passenger, Flight $flight)
    {
        $this->passenger = $passenger;
        $this->flight = $flight;
    }

    public function getPassenger(): UserInterface
    {
        return $this->passenger;
    }

    public function getFlight(): Flight
    {
        return $this->flight;
    }
}
