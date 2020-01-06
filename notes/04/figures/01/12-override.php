<?php

class MailChimp extends Mailer
{
  // override the to method from Mailer
  public function to(string $address) : Mailer
  {
    // same as before
    $this->to = $address;

    // additional code
    $this->doWeirdAPIThing();
    return $this;
  }

  // ...etc.
}
