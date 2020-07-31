<?php

require __DIR__ . "/vendor/autoload.php";

function both($first, $second) {
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

dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);
