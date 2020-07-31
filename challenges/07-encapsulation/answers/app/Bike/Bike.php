<?php

namespace App\Bike;

class Bike
{
    private $frame;
    private $wheels = [];

    public function __construct(Frame $frame)
    {
        $this->frame = $frame;
    }

    public function addWheel(Wheel $wheel) : Bike
    {
        $this->wheels[] = $wheel;
        return $this;
    }

    private function wheelCount() : int
    {
        return count($this->wheels);
    }

    public function describe() : string
    {
        $parts = [
            "I am a {$this->frame->variation()} framed bike",
            "I am made of {$this->frame->material()}",
            "I have {$this->wheelCount()} wheels",
        ];

        return implode(". ", $parts);
    }
}
