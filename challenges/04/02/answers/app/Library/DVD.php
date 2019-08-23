<?php

namespace App\Library;

class DVD implements Titled
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function title()
    {
        return $this->title;
    }
}
