<?php

declare(strict_types=1);

function double(array $values) : array {
    $doubled = [];

    foreach ($values as $value) {
        $doubled[] = $value * 2;
    }

    return $doubled;
}

var_dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);
