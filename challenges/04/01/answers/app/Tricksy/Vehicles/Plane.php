<?php

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Plane extends Vehicle
{
    private $pilot;
    private $copilot;
    private $stewards;

    public function setPilot(Person $pilot)
    {
        $this->pilot = $pilot;
        return $this;
    }

    public function setCopilot(Person $copilot)
    {
        $this->copilot = $copilot;
        return $this;
    }

    public function setStewards($stewards)
    {
        $this->stewards = collect($stewards);
        return $this;
    }

    protected function occupants()
    {
        return $this->passengers->merge([$this->pilot, $this->copilot])
                    ->merge($this->stewards);
    }
}
