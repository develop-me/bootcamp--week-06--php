<?php

// make the class abstract
// it cannot be instanced now, only extended
abstract class Mailer
{
  protected $to;
  protected $from;
  protected $characterSet = "utf8";

  public function to(string $address) : Mailer
  {
    $this->to = $address;
    return $this;
  }

  public function from(string $address) : Mailer
  {
    $this->from = $address;
    return $this;
  }

  // create an abstract method signature
  // all children of this class must implement the send method
  abstract public function send(string $subject, string $message) : Mailer;
}
