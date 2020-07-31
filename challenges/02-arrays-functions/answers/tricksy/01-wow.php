<?php

require __DIR__ . "/../vendor/autoload.php";

function repeat($str, $times) {
    $soFar = "";

    for ($i = 0; $i < $times; $i += 1) {
        $soFar .= $str;
    }

    return $soFar;
}

function wow($times) {
    return "W" . repeat("o", $times) . "w";
}

dump(wow(12)); // "Woooooooooooow"
dump(wow(4)); // "Woooow"
