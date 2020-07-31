<?php

class MailChimp extends Mailer
{
  // override the to method from Mailer
  public function to(string $address) : Mailer
  {
    // additional code
    $this->doWeirdAPIThing();

    // same as before
    $this->to = $address;

    return $this;
  }

  // ...etc.
}
