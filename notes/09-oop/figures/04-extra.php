<?php

class Mail
{
  // ...other properties
  private $bcc = [];

  // ...other methods

  public function bcc($bcc)
  {
    $this->bcc = $bcc;
    return $this;
  }

  public function mail()
  {
    // updated to use $this->bcc as well
  }
}


// elsewhere
// can now add bcc as an option
$mail = new Mail();
$mail->to("bob@bob.com")
     ->from("hello@wombat.io")
     ->subject("A Wombat Welcome")
     ->message("Welcome to the best app for finding wombats near you")
     ->bcc([
       "ada@lovelace.dev",
       "donald@knuth.horse",
     ])->mail();
