<?php

require __DIR__ . "/../vendor/autoload.php";

$total = 0;
$counted = 0;
$i = 1;

while ($counted < 117) {
    if ($i % 3 === 0 || $i % 7 === 0) {
        $total += $i;
        $counted += 1;
    }

    $i += 1;
}

dump($total);
