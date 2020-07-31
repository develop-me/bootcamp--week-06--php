<?php

require __DIR__ . "/vendor/autoload.php";

function sum($values) {
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }

    return $total;
}

function sumBoth($values1, $values2) {
    return sum($values1) + sum($values2);
}

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);
