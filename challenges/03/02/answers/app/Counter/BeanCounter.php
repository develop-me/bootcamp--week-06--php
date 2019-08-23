<?php

namespace App\Counter;

class BeanCounter
{
    private $counter;

    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function addBean()
    {
        $this->counter->increment();
        return $this;
    }

    public function howMany()
    {
        return $this->counter->count();
    }
}
