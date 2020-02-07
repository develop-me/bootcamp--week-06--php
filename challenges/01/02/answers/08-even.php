<?php

declare(strict_types=1);

function even(int $num) : bool {
    return $num % 2 === 0;
}

var_dump(even(1)); // bool(false)
var_dump(even(2)); // bool(true)
