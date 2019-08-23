<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

abstract class Vehicle
{
    protected $passengers;

    public function setPassengers($passengers)
    {
        $this->passengers = collect($passengers);
        return $this;
    }

    public function listOccupants()
    {
        return $this->occupants()->map(function (Person $person) {
            return $person->fullName();
        })->sort()->values()->all();
    }

    abstract protected function occupants();
}
