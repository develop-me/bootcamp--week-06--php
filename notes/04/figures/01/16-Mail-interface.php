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

  public function send($subject, $message)
  {
    // send using local mail server
  }
}
