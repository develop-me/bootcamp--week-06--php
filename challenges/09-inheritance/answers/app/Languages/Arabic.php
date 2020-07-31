<?php

namespace App\Languages;

class Arabic extends Language
{
    protected $name = "Arabic";

    public function hello() : string
    {
        return "مرحبا";
    }
}
