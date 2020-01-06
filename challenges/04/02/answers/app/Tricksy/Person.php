<?php

namespace App\Tricksy;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($first, $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function fullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function sayHelloTo(Person $person)
    {
        return "Hello " . $person->fullName();
    }
}
