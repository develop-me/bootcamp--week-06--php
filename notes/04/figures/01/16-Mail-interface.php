<?php

// this time we use implements
// extend a class, implement an interface
class Mail implements MailerInterface
{
  // setup properties
  // not inheriting, so need to create
  private $to;
  private $from;
  private $characterSet = "utf8";

  // again, not inheriting, so need to create
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

  public function send(string $subject, string $message) : MailerInterface
  {
    // send using local mail server
  }
}
