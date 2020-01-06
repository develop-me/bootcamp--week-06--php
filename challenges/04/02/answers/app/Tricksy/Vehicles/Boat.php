<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Boat extends Vehicle
{
    private $captain;

    public function setCaptain(Person $captain)
    {
        $this->captain = $captain;
        return $this;
    }

    public function occupants()
    {
        return $this->passengers->merge([$this->captain]);
    }
}
