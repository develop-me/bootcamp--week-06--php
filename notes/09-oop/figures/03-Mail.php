<?php

class Mail
{
  private $to;
  private $from;
  private $characterSet = "utf8";

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
    // ... code to send mail
    // we can use $this to access the values
  }
}


// elsewhere
$mail = new Mail();
$mail->to("bob@bob.com")
     ->from("hello@wombat.io")
     ->send(
       "A Wombat Welcome",
       "Welcome to the best app for finding wombats near you"
     );
