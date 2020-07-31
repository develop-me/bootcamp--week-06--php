<?php

require __DIR__ . "/vendor/autoload.php";

function average($numbers) {
    return collect($numbers)->reduce(fn($a, $b) => $a + $b, 0) / count($numbers);
}

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);
