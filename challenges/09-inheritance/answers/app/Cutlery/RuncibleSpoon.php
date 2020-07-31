<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    public function scoop() : RuncibleSpoon
    {
        $this->scoops += 2;
        return $this;
    }
}
