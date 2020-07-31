<?php

require __DIR__ . "/vendor/autoload.php";

function double($values) {
    $doubled = [];

    foreach ($values as $value) {
        $doubled[] = $value * 2;
    }

    return $doubled;
}

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);
