<?php

require __DIR__ . "/vendor/autoload.php";

function even($num) {
    return $num % 2 === 0;
}

dump(even(1)); // false
dump(even(2)); // true
