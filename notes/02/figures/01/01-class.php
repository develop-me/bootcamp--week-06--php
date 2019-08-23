<?php

class Person
{
  // declare class properties at the top
  private $firstName;
  private $lastName;
  private $dob;

  // the constructor method
  public function __construct($firstName, $lastName, $dob)
  {
    // we can use $this to reference object properties
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->dob = $dob;
  }

  public function getName()
  {
    // use $this to read properties
    return "{$this->firstName} {$this->lastName}";
  }

  public function getAge()
  {
    // do some date stuff
    $date = new DateTime($this->dob);
    $now = new DateTime();
    return $now->diff($date)->y;
  }
}
