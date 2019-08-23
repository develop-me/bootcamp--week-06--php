<?php

class Person
{
  public static function lastNames($people)
  {
    // call the getLastNames method of this class
    $lastNames = static::getLastNames($people);

    // sort alphabetically then return
    sort($lastNames);
    return $lastNames;
  }

  // a private static method
  private static function getLastNames($people)
  {
    return array_map(function ($person) {
      return $person->lastName();
    }, $people);
  }

  // ...non-static methods and properties at bottom
}
