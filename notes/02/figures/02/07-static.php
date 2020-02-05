<?php

class Person
{
  // static methods (and properties) at top
  public static function lastNames($people)
  {
    $lastNames = array_map(function ($person) {
      // best to use methods to get values
      return $person->lastName();
    }, $people);

    // sort alphabetically then return
    sort($lastNames);
    return $lastNames;
  }

  // ...non-static methods and properties at bottom
}

// elsewhere, pass in an array of Person objects
Person::lastNames([$oli, $pete, $audrey, $tom]);
