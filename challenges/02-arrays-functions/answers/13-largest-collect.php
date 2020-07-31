<?php

require __DIR__ . "/vendor/autoload.php";

function largest($values) {
    return collect($values)->reduce(fn($a, $b) => $a > $b ? $a : $b, $values[0]);
}

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);
