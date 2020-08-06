<?php

class Person
{
  // a method to returns just last names
  public static function lastNames($people)
  {
    return array_map(function ($person) {
      return $person->lastName();
    }, $people);
  }

  // a method to get the last names sorted
  // uses the existing static lastNames method
  public static function sortedLastNames($people)
  {
    // call the lastNames method of this class
    $lastNames = static::lastNames($people);

    // sort alphabetically then return
    sort($lastNames);
    return $lastNames;
  }

  // ...non-static methods and properties at bottom
}
