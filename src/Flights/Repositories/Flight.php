<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

use DateTimeImmutable;

class Flight
{
    /** @var AirportInterface */
    private $origin;

    /** @var AirportInterface */
    private $destination;

    /** @var DateTimeImmutable */
    private $departureDateTime;

    public function __construct(AirportInterface $origin, AirportInterface $destination, DateTimeImmutable $departureDateTime)
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureDateTime = $departureDateTime;
    }

    public function getOrigin(): AirportInterface
    {
        return $this->origin;
    }

    public function getDestination(): AirportInterface
    {
        return $this->destination;
    }

    public function getDepartureDateTime(): DateTimeImmutable
    {
        return $this->departureDateTime;
    }
}
