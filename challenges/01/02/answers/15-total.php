<?php

declare(strict_types=1);

function total(array $items) : float {
    $total = 0;

    foreach ($items as $item) {
        $total += $item["price"];
    }

    return $total;
};

$shoppingList = [[
    "name" => "coffee",
    "price" => 3.50,
], [
    "name" => "tea",
    "price" => 2.50,
], [
    "name" => "toblerone",
    "price" => 3.20,
], [
    "name" => "newspaper",
    "price" => 0.10,
]];

var_dump(
    total($shoppingList), // float(9.3)
);
