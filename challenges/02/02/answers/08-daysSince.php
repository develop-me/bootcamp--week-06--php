<?php

declare(strict_types=1);

function daysSince(string $date) : int {
    $now = new DateTime();
    $then = new DateTime($date);
    return $now->diff($then)->days;
}

var_dump(
    daysSince("1984-04-16"), // 13 thousand and something
    // why not try *your* date of birth?
);
