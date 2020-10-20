<?php

class Mail
{
  private $to;
  // ... other properties

  public function to($address)
  {
    if (filter_var($address, FILTER_VALIDATE_EMAIL) === $address) {
      $this->to === $address;
      return $this;
    }

    throw new InvalidArgumentException("Invalid email address");
  }

  // ...other methods
}
