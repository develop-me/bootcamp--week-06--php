<?php

class MailChimp extends Mailer
{
  public function to(string $address) : Mailer
  {
    $this->doWeirdAPIThing();

    // call the to method of the parent
    // passing in the address argument
    // has same method signature
    return parent::to($address);
  }

  // ...etc.
}
