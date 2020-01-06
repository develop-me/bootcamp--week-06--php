<?php

namespace App\Cutlery;

class Spoon
{
    protected $scoops = 0;

    public function scoop()
    {
        $this->scoops += 1;
        return $this;
    }

    public function howManyScoops()
    {
        return $this->scoops;
    }
}
