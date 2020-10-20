<?php

// extends Mailer
// so no need to write to, from, subject, message
class Mail extends Mailer
{
  public function mail() : void
  {
    // ... sends the mail
    dump("Sending using local mail server: \"{$this->subject}\" to {$this->to}, from {$this->from}, saying {$this->message}");
  }
}
