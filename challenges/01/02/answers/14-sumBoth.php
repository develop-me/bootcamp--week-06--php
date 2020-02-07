<?php

declare(strict_types=1);

function sum(array $values) : int {
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }

    return $total;
}

function sumBoth(array $values1, array $values2) : int {
    return sum($values1) + sum($values2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
);
