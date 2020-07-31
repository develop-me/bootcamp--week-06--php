<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function area() : float
    {
        return $this->side * $this->side;
    }
}
