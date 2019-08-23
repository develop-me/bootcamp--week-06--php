<?php

class MailingList
{
  // ...etc.

  // use the Mailer type-declaration to
  // allows all children of Mailer
  public function sendWith(Mailer $mailer)
  {
    // setup the from address
    $mailer->from($this->from);

    // for each email send with the passed in $mailer
    foreach ($this->emails as $email) {
      $mailer->to($email)->send($this->subject, $this->message);
    }
  }
}

// elsewhere
$mailinglist = new MailingList();
$mailinglist->sendWith(new Mail());

// or maybe
$mailinglist->sendWith(new MailChimp());
