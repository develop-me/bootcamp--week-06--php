<?php

namespace App\Counter;

class Counter
{
    private $counter = 0;

    public function increment()
    {
        $this->counter += 1;
        return $this;
    }

    public function count()
    {
        return $this->counter;
    }
}
