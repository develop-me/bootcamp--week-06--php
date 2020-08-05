<?php

class Mail
{
  private $to;
  private $from;
  private $subject;
  private $message;
  private $characterSet = "utf8";

  public function to($to)
  {
    $this->to = $to;
  }

  public function from($from)
  {
    $this->from = $from;
  }

  public function subject($subject)
  {
    $this->subject = $subject;
  }

  public function message($message)
  {
    $this->message = $message;
  }

  public function mail()
  {
    // ... code to send mail
    // we can use $this to access the values
  }
}


// elsewhere
$mail = new Mail();
$mail->to("bob@bob.com")
     ->from("hello@wombat.io")
     ->subject("A Wombat Welcome")
     ->message("Welcome to the best app for finding wombats near you")
     ->mail();
