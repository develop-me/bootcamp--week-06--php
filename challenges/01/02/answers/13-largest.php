<?php

declare(strict_types=1);

function largest(array $values) : int {
    $largest = $values[0];

    foreach ($values as $value) {
        if ($value > $largest) {
            $largest = $value;
        }
    }

    return $largest;
}

var_dump(
    largest([2, 4, 6, 4, 7, 5]), // int(7)
    largest([-2, 4, 6, 4, 2, -7, 5]), // int(6)
    largest([-2, -4, -4, -7, -5]), // int(-2)
);
