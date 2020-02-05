<?php

class Address
{
  private $street;
  private $postcode;

  // a setter function
  public function setStreet($street)
  {
    // $this represents whichever object we're working on
    $this->street = $street;
    return $this;
  }

  public function setPostcode($postcode)
  {
    // $this represents whichever object we're working on
    $this->postcode = $postcode;
    return $this;
  }
}


// elsewhere
$address = new Address();

// because setStreet returns $this we can chain methods
$address->setStreet("1630 Revello Drive")->setPostcode("BS3 9BR");
