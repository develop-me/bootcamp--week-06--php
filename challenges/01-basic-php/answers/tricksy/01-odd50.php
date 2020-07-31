<?php

require __DIR__ . "/../vendor/autoload.php";

$total = 0;
$counted = 0;
$i = 1;

while ($counted < 50) {
    $total += $i;
    $counted += 1;
    $i += 2;

    dump($total);
}
