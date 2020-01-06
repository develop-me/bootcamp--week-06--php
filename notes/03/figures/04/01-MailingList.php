<?php

class MailingList
{
  private $emails = [];
  private $subject;
  private $message;
  private $from;

  // ...mailing list code: getters, setters, etc.

  // use the Mail type-declaration to
  // only allow Mail classes
  // returns $this, which is an instance of MailingList
  public function sendWith(Mail $mailer) : MailingList
  {
    // setup the from address
    $mailer->from($this->from);

    // for each email send with the passed in $mailer
    foreach ($this->emails as $email) {
      $mailer->to($email)->send($this->subject, $this->message);
    }

    return $this;
  }
}
