<?php

namespace App\Library;

class CD implements Titled
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function title() : string
    {
        return $this->title;
    }
}
