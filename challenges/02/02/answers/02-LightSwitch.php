<?php

// Create an class that represents a light switch
class LightSwitch
{
    private $on = false;

    public function turnOn()
    {
        // set the on property to true
        $this->on = true;
    }

    public function turnOff()
    {
        // set the on property to false
        $this->on = false;
    }

    public function isOn()
    {
        // return the value of the on property
        return $this->on;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)
