<?php

namespace App;

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

    public function sayHelloTo($person)
    {
        return "Hello {$person->fullName()}";
    }
}
