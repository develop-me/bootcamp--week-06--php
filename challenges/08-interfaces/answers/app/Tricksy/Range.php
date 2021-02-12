<?php

namespace App\Tricksy;

use Iterator;

class Range implements Iterator
{
    private $start;
    private $end;
    private $index = 0;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function current()
    {
        return $this->index + $this->start;
    }

    public function key()
    {
        return $this->index;
    }

    public function next()
    {
        $this->index += 1;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function valid()
    {
        return $this->current() <= $this->end;
    }
}
