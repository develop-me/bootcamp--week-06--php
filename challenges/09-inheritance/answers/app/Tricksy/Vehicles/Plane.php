<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Plane extends Vehicle
{
    private $pilot;
    private $copilot;
    private $stewards;

    public function setPilot(Person $pilot) : Plane
    {
        $this->pilot = $pilot;
        return $this;
    }

    public function setCopilot(Person $copilot) : Plane
    {
        $this->copilot = $copilot;
        return $this;
    }

    public function setStewards($stewards) : Plane
    {
        $this->stewards = collect($stewards);
        return $this;
    }

    protected function occupants() : array
    {
        return $this->passengers->merge([$this->pilot, $this->copilot])
                    ->merge($this->stewards);
    }
}
