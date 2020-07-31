<?php

namespace App\People;

use Carbon\Carbon;

class Person
{
    public static function getAges($people)
    {
        return collect($people)->map(function ($person) {
            return $person->age();
        })->all();
    }

    private $name;
    private $birthday;

    public function __construct($name, $birthday)
    {
        $this->name = $name;
        $this->birthday = new Carbon($birthday);
    }

    public function age()
    {
        return $this->birthday->age;
    }
}
