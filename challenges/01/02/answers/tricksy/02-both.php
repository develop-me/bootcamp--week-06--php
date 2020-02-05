<?php

declare(strict_types=1);

function both(array $first, array $second) : array {
    $both = [];

    foreach ($first as $firstVal) {
        foreach ($second as $secondVal) {
            if ($firstVal === $secondVal) {
                $both[] = $firstVal;
            }
        }
    }

    return $both;
}

var_dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);
