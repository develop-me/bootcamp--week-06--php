<?php

namespace App\Languages;

abstract class Language
{
    protected $name;

    public function name()
    {
        return $this->name;
    }

    abstract public function hello();
}
