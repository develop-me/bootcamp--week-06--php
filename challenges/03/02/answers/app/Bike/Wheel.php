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

    public function __construct($size, $type)
    {
        $this->size = $size;
        $this->changeType($type);
    }

    public function setType($type)
    {
        $this->changeType($type);
        return $this;
    }

    private function changeType($type)
    {
        if (array_search($type, $this->validTypes) !== false) {
            $this->type = $type;
        }

        return $this;
    }

    public function size()
    {
        return $this->size;
    }

    public function type()
    {
        return $this->type;
    }
}
