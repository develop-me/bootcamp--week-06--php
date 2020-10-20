<?php

namespace App\Shopping;

class Basket
{
    private $items = [];

    public function __construct()
    {
        $this->items = collect();
    }

    public function add($item)
    {
        // add the given item to the array of items
        $this->items->push($item);
        return $this;
    }

    public function total()
    {
        $total = $this->items
                      ->map(fn ($item) => $item->price())
                      ->sum();

        return "£" . number_format($total, 2);
    }

    public function items()
    {
        return $this->items
                    ->map(fn ($item) => $item->type())
                    ->all();
    }
}
