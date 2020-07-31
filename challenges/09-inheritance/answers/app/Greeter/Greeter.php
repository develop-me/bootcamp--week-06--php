<?php

namespace App\Greeter;

use App\Languages\Language;

class Greeter
{
    private $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function greet($name) : string
    {
        return "{$this->language->hello()} {$name}";
    }
}
