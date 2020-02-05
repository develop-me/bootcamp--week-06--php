<?php

declare(strict_types=1);

function stone(float $kg) : float {
    return $kg * 0.15747;
}

var_dump(
    stone(74), // float(11.65278)
    stone(50), // float(7.8735)
);
