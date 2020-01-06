<?php

namespace App\Library;

class Shelf
{
    private $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function addItem(Titled $item)
    {
        $this->items->push($item);
        return $this;
    }

    public function titles()
    {
        return $this->items->map(function ($item) {
            return $item->title();
        })->all();
    }
}
