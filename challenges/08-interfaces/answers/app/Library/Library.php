<?php

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles() : array
    {
        return $this->shelves->reduce(function ($books, $shelf) {
            return $books->merge($shelf->titles());
        }, collect())->all();
    }
}
