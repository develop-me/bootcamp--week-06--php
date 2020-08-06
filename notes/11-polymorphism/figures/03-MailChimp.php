<?php

class MailChimp implements MailInterface
{
  // ...to, from, subject, message as before

  // completely different mail method
  public function mail() : void
  {
    // ... sends the mail
    dump("Sending using MailChimp: \"{$this->subject}\" to {$this->to}, from {$this->from}, saying {$this->message}");
  }
}
