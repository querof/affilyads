<?php

declare(strict_types=1);

namespace Affilyadds\src\Flights;

interface FlightBookingSystemInterface
{
    public function getAllAirports();
    public function getPossibleDestinationAirportsForOriginAirport(AirportInterface $origin);
    public function getDepartureTimes(AirportInterface $origin, AirportInterface $destination);
    public function getFlightCost(AirportInterface $origin, AirportInterface $destination, UserInterface $user, $time);
    public function bookFlight(AirportInterface $origin, AirportInterface $destination, UserInterface $user, $time, $cost);

}
