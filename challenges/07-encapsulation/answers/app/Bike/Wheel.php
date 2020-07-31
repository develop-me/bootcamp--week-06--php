<?php

namespace App\Bike;

class Wheel
{
    private $size;
    private $type = "hybrid";

    private $validTypes = [
        "town",
        "hybrid",
        "road",
        "mountain",
    ];

    public function __construct(float $size, string $type)
    {
        $this->size = $size;
        $this->changeType($type);
    }

    public function setType(string $type) : Wheel
    {
        $this->changeType($type);
        return $this;
    }

    private function changeType(string $type) : Wheel
    {
        if (array_search($type, $this->validTypes) !== false) {
            $this->type = $type;
        }

        return $this;
    }

    public function size() : float
    {
        return $this->size;
    }

    public function type() : string
    {
        return $this->type;
    }
}
