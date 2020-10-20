<?php

// declare the class abstract
// can't be instanced itself now
abstract class Mailer
{
  protected $to;
  // ...other properties

  public function to(string $address) : Mailer
  {
    $this->to = $address;
    return $this;
  }

  // ...other methods

  // abstract method
  abstract public function mail(string $subject, string $message) : void;
}
