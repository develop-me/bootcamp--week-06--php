<?php

// Create a class that represents a car
class Car
{
    private $make;
    private $np;
    private $mileage = 0;

    // takes the make and numberplate values when created
    public function __construct($make, $np)
    {
        // store the make property
        $this->make = $make;
        // store the numberplare property
        $this->np = $np;
    }

    // return the numberplate property
    public function getNumberplate()
    {
        return $this->np;
    }

    // return the make property
    public function getMake()
    {
        return $this->make;
    }

    // return the mileage property
    public function getMileage()
    {
        return $this->mileage;
    }

    // take a number and add it to the current value of the mileage property
    public function addJourney($miles)
    {
        $this->mileage += $miles;
    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)
