<?php

namespace App\Tricksy;

use Iterator;

class Range implements Iterator
{
    private $start;
    private $end;
    private $current;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
        $this->rewind();
    }

    public function current()
    {
        return $this->current;
    }

    public function key()
    {
        return $this->current - $this->start;
    }

    public function next()
    {
        $this->current += 1;
    }

    public function rewind()
    {
        $this->current = $this->start;
    }

    public function valid()
    {
        return $this->current >= $this->start && $this->current <= $this->end;
    }
}
