<?php

class Person
{
    private $firstName;
    private $lastName;
    private $birthdate;

    public function __construct($firstName, $lastName, $birthdate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthdate = $birthdate;
    }

    public function getAge()
    {
        $date = new DateTime($this->birthdate);
        $now = new DateTime();
        return $now->diff($date)->y;
    }
}
