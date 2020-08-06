<?php

class Mailer
{
  protected $to;
  protected $from;
  protected $message;
  protected $subject;

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

  public function subject(string $subject) : Mailer
  {
    $this->subject = $subject;
    return $this;
  }

  public function message(string $message) : Mailer
  {
    $this->message = $message;
    return $this;
  }
}
