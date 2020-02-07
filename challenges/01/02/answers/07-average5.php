<?php

declare(strict_types=1);

function average5(float $a, float $b, float $c, float $d, float $e) : float {
    return ($a + $b + $c + $d + $e) / 5;
}

var_dump(
    average5(1, 2, 3, 4, 5), // float(3)
);
