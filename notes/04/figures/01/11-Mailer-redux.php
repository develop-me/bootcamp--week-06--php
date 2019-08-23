<?php

// make the class abstract
// it cannot be instanced now, only extended
abstract class Mailer
{
  protected $to;
  protected $from;
  protected $characterSet = "utf8";

  public function to($address)
  {
    $this->to = $address;
    return $this;
  }

  public function from($address)
  {
    $this->from = $address;
    return $this;
  }

  // create an abstract method signature
  // all children of this class must implement the send method
  abstract public function send($subject, $message);
}
