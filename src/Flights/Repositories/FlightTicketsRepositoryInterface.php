<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights\Repositories;

interface FlightTicketsRepositoryInterface
{
    /** @returns FlightTicket[]  */
    public function getBookedFlights(): array;

    public function addTicket(Flight $flight, UserInterface $user): FlightTicket;

    //add  the rest of crud methods related with the repository
}
