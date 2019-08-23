<?php

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf($shelf)
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles()
    {
        return $this->shelves->reduce(function ($books, $shelf) {
            return $books->merge($shelf->titles());
        }, collect())->all();
    }
}
