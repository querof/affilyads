<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights;

use Affilyadds\src\Flights\Repositories\AirportInterface;
use Affilyadds\src\Flights\Repositories\Flight;
use Affilyadds\src\Flights\Repositories\FlightTicket;
use Affilyadds\src\Flights\Repositories\UserInterface;
use DateTimeImmutable;

interface FlightBookingSystemInterface
{
    /** @return  DateTimeImmutable[] */
    public function getDepartureTimes(AirportInterface $origin, AirportInterface $destination): array;

    /** @return AirportInterface[] */
    public function getPossibleDestinationAirportsForOriginAirport(AirportInterface $origin): array;

    public function bookFlight(Flight $flight, UserInterface $user): FlightTicket;
}
