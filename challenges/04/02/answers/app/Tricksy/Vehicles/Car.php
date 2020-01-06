<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Car extends Vehicle
{
    private $driver;

    public function setDriver(Person $driver)
    {
        $this->driver = $driver;
        return $this;
    }

    public function occupants()
    {
        return $this->passengers->merge([$this->driver]);
    }
}
