<?php

namespace App\Stuff\Things;

class Potato
{
    private $watered = 0;

    public function water()
    {
        $this->watered += 1;
        return $this;
    }

    public function hasGrown()
    {
        return $this->watered >= 5;
    }
}
