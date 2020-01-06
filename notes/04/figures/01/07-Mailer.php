<?php

class Mailer
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
}
