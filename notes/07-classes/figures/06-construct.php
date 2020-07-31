<?php

class Person
{
    // ...properties

    // takes three parameters
    public function __construct($firstName, $lastName, $birthdate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthdate = $birthdate;
    }

    // ...other methods
}

// we pass in three arguments
$mark = new Person("Mark", "Wales", "1984-04-16");
