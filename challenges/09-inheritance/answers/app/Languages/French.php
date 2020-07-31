<?php

namespace App\Languages;

class French extends Language
{
    protected $name = "French";

    public function hello() : string
    {
        return "Bonjour";
    }
}
