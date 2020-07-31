<?php

namespace App\Shapes;

class Extrude
{
    private $shape;
    private $depth;

    public function __construct(ShapeInterface $shape, float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    public function volume() : float
    {
        return $this->shape->area() * $this->depth;
    }
}
