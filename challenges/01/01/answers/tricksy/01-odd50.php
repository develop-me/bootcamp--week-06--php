<?php

$total = 0;
$counted = 0;
$i = 1;

while ($counted < 50) {
    $total += $i;
    $counted += 1;
    $i += 2;

    var_dump($total);
}
