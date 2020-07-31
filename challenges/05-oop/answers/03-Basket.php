<?php

require __DIR__ . "/vendor/autoload.php";

// Create an class that represents a shopping basket. It should have a property, `items`, that keeps track of the items in the basket. It should have an `add` method to add items to the basket. It should have a `total` method that returns the value of all the items' prices. It should have a `items` method that returns an array of item names.

class Basket
{
    private $items = [];

    public function add($item)
    {
        // add the given item to the array of items
        $this->items[] = $item;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return "£" . number_format($total, 2);
    }

    public function items()
    {
        $names = [];

        foreach ($this->items as $item) {
            $names[] = $item->getName();
        }

        return $names;
    }
}

class BasketItem
{
    private $name;
    private $price;

    // takes the name and price values on creation
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // returns the name
    public function getName()
    {
        return $this->name;
    }

    // return the price
    public function getPrice()
    {
        return $this->price;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // array(2) { [0]=> "coffee" [1]=> "tea" }
