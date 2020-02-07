<?php

// we implement the MailerInterface
class Mail implements MailerInterface
{
  // setup properties
  private $to;
  private $from;
  private $characterSet = "utf8";

  public function to(string $address) : MailerInterface
  {
    $this->to = $address;
    return $this;
  }

  public function from(string $address) : MailerInterface
  {
    $this->from = $address;
    return $this;
  }

  public function send(string $sub, string $msg) : MailerInterface
  {
    // send using local mail server
  }
}
