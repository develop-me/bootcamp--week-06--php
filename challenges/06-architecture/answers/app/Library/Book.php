<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;

    private $current = 1;

    public function __construct($title, $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function title()
    {
        return $this->title;
    }

    public function read($pages)
    {
        $this->current += $pages;
        return $this;
    }

    public function currentPage()
    {
        return $this->current;
    }
}
