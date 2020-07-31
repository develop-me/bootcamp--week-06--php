<?php

class Address
{
  private $street;
  private $town;
  private $postcode;
  private $country;

  // a setter function
  public function setStreet($street)
  {
    // $this represents whichever object we're working on
    $this->street = $street;
    return $this;
  }

  // ...setTown, setCountry, setPostcode as above

  // a getter function
  public function getFullAddress()
  {
    $parts = array_filter([
      $this->street,
      $this->town,
      $this->postcode,
      $this->country,
    ]);

    // you can call methods too
    return implode(", ", $parts);
  }
}
