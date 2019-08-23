<?php

use Illuminate\Support\Collection;

$numbers = new Collection([1, 2, 3, 4, 5]);

$even = $numbers->filter(function ($n) {
  return $n % 2 === 0;
});

dump($even->all()); // [2, 4]
