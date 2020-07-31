<?php

namespace App\Shapes;

class Rectangle implements ShapeInterface
{
    private $height;
    private $width;

    public function __construct(float $height, float $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area() : float
    {
        return $this->height * $this->width;
    }
}
