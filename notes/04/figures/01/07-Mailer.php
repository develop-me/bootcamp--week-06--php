<?php

class Mailer
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
}
