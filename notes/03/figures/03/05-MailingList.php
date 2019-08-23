<?php

class MailingList
{
  private $emails = [];
  private $subject;
  private $message;
  private $from;

  // mailing list code
  // to set from, subject, and message
  // and to add email addresses

  // use the Mail type-declaration to
  // only allow Mail classes
  public function sendWith(Mail $mailer)
  {
    // setup the from address
    $mailer->from($this->from);

    // for each email send with the passed in $mailer
    foreach ($this->emails as $email) {
      $mailer->to($email)->send($this->subject, $this->message);
    }
  }
}
