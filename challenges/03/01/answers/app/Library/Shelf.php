<?php

namespace App\Library;

class Shelf
{
    private $books;

    public function __construct()
    {
        $this->books = collect();
    }

    public function addBook($book)
    {
        $this->books->push($book);
        return $this;
    }

    public function titles()
    {
        return $this->books->map(function ($book) {
            return $book->title();
        })->all();
    }
}
