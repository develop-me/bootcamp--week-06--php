<?php

require __DIR__ . "/../vendor/autoload.php";

$output = "";

for ($i = 1; $i <= 15; $i += 1) {
    $row = "";

    for ($j = 1; $j <= 15; $j += 1) {
        $row .= ($i * $j) . "\t";
    }

    $output .= $row . "\n";
}

echo $output;
