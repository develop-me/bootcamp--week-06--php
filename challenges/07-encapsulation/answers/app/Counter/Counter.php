<?php

namespace App\Counter;

class Counter
{
    private $counter = 0;

    public function increment() : Counter
    {
        $this->counter += 1;
        return $this;
    }

    public function count() : int
    {
        return $this->counter;
    }
}
