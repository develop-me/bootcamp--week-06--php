<?php

abstract class Mailer
{
  // ...etc.

  // not sure why you'd need to do this
  // but now a child class couldn't change this method
  final public function to(string $address) : Mailer
  {
    $this->to = $address;
    return $this;
  }
}
