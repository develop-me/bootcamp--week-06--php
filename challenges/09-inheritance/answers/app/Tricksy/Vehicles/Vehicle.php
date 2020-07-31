<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

abstract class Vehicle
{
    protected $passengers;

    public function setPassengers(array $passengers) : Vehicle
    {
        $this->passengers = collect($passengers);
        return $this;
    }

    public function listOccupants() : array
    {
        return $this->occupants()->map(function (Person $person) {
            return $person->fullName();
        })->sort()->values()->all();
    }

    abstract protected function occupants();
}
