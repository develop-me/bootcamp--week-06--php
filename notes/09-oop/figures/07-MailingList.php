<?php

class MailingList
{
  private $subscribers = [];

  public function __construct($subscribers)
  {
    $this->subscribers = $subscribers;
  }

  // the send method takes a mail object as an argument
  public function send($mail)
  {
    // go through each subscriber one at a time
    foreach ($this->subscribers as $subscriber) {
      // use the passed in Mail object
      // update just the to field each time
      // then send the mail
      $mail->to($subscriber)->mail();
    }
  }
}
