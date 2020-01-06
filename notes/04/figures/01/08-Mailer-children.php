<?php

// extends Mailer
// so it has the same properties and methods
class Mail extends Mailer
{
  public function send(string $subject, string $message) : Mailer
  {
    // send using local mail server
  }
}

// extends Mailer
// so it has the same properties and methods
class MailChimp extends Mailer
{
  public function send(string $subject, string $message) : Mailer
  {
    // send using mail chimp
  }
}
