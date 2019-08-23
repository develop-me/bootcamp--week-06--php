<?php

// we can also use the collect function to create a new collection
$numbers = collect([1, 2, 3, 4, 5]);

$squared = $numbers->map(function ($n) {
  return $n * $n;
});

dump($squared->all()); // [1, 4, 9, 16, 25]
