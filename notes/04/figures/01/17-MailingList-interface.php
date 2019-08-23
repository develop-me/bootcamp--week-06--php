<?php

class MailingList
{
  // ...etc.

  // use the MailerInteface type-declaration to
  // allows all classes that implement MailerInterface
  public function sendWith(MailerInterface $mailer)
  {
    // setup the from address
    $mailer->from($this->from);

    // for each email send with the passed in $mailer
    foreach ($this->emails as $email) {
      $mailer->to($email)->send($this->subject, $this->message);
    }
  }
}
