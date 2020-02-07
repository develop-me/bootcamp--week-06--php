<?php

declare(strict_types=1);

function repeat(string $str, int $times) : string {
    $soFar = "";

    for ($i = 0; $i < $times; $i += 1) {
        $soFar .= $str;
    }

    return $soFar;
}

function wow(int $times) : string {
    return "W" . repeat("o", $times) . "w";
}

var_dump(wow(12)); // string(14) "Woooooooooooow"
var_dump(wow(4)); // string(6) "Woooow"
