<?php

namespace App;

use Carbon\Carbon;

class Peep
{
    public static function getAges(array $people) : array
    {
        return collect($people)->map(fn ($person) => $person->age())->all();
    }

    public static function averageAge(array $people) : float
    {
        return collect(static::getAges($people))->avg();
    }

    private $name;
    private $birthday;

    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = new Carbon($birthday);
    }

    public function age() : int
    {
        return $this->birthday->age;
    }

    public function name() : string
    {
        return $this->name;
    }
}
