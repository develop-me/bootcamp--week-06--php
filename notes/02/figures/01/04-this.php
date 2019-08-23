<?php

class Address
{
  private $street;
  private $town;
  private $country;

  // a setter function
  public function setStreet($street)
  {
    // $this represents whichever object we're working on
    $this->street = $street;
    return $this;
  }

  // ...setTown and setCountry as above

  // a getter function
  public function getAddress()
  {
    // you can call methods too
    return implode(", ", $this->assigned());
  }

  private function assigned()
  {
    return array_filter([
      $this->street,
      $this->town,
      $this->country,
    ]);
  }
}
