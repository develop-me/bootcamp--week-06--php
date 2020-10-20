<?php

namespace App;

class House
{
    public static function census(array $households)
    {
        return collect($households)->flatMap(fn ($house) => $house->names())->all();
    }

    private $dwellers;

    public function __construct()
    {
        $this->dwellers = collect();
    }

    public function addDweller(Peep $peep) : House
    {
        $this->dwellers->push($peep);
        return $this;
    }

    public function names() : array
    {
        return $this->dwellers->map(fn (Peep $peep) => $peep->name())->all();
    }
}
