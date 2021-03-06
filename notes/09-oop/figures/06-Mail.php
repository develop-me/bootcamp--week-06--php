<?php

class Mail
{
  private $to;
  private $from;
  private $message;
  private $subject;

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

  public function subject($subject)
  {
    $this->subject = $subject;
    return $this;
  }

  public function message($message)
  {
    $this->message = $message;
    return $this;
  }

  public function mail()
  {
    // ... sends the mail
    dump("Sending using local mail server: \"{$this->subject}\" to {$this->to}, from {$this->from}, saying {$this->message}");
  }
}
