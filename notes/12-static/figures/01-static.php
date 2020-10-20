<?php

class Person
{
  // static methods (and properties) at top
  public static function lastNames($people)
  {
    return array_map(function ($person) {
      // best to use methods to get values
      return $person->lastName();
    }, $people);
  }

  // ...non-static methods and properties at bottom
}

// elsewhere, pass in an array of Person objects
Person::lastNames([$oli, $pete, $nicola, $tom]);
