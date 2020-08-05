<?php

class Mail
{
  private $to;
  private $from;
  private $subject;
  private $message;

  public function to($to)
  {
    $this->to = $to;
    return $this;
  }

  public function from($from)
  {
    $this->from = $from;
    return $this;
  }

  public function subject($subject)
  {
    $this->subject = $subject;
    return $this;
  }

  public function message($message)
  {
    $this->message = $message;
    return $this;
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
