<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    public function scoop()
    {
        $this->scoops += 2;
        return $this;
    }
}
