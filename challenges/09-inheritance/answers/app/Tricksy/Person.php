<?php

namespace App\Tricksy;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct(string $first, string $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function fullName() : string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello " . $person->fullName();
    }
}
