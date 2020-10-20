<?php

namespace App\Marsupials;

class Wombat
{
    private $name;
    private $hugs = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHelloTo($wombat)
    {
        return "Hello {$wombat->getName()}";
    }

    public function giveHug()
    {
        $this->hugs += 1;
        return $this;
    }

    public function howManyHugs()
    {
        return $this->hugs;
    }
}
