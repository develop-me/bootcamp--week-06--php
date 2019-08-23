<?php

class MailChimp extends Mailer
{
  public function to($address)
  {
    // call the to method of the parent
    // passing in the address argument
    // has same method signature
    parent::to($address);

    // additional code
    $this->doWeirdAPIThing();
    return $this;
  }

  // ...etc.
}
