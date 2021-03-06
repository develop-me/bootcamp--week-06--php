<?php

namespace App\Cooking;

class Ingredient
{
    private $name;
    private $dietaryInfo;

    public function __construct($name, $dietaryInfo)
    {
        $this->name = $name;
        $this->dietaryInfo = collect($dietaryInfo);
    }

    public function name()
    {
        return $this->name;
    }

    public function vegan()
    {
        return !$this->dietaryInfo->contains("animal produce");
    }
}
