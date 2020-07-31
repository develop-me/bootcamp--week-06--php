<?php

// use the collect function to create a new collection
$numbers = collect([1, 2, 3, 4, 5]);

$even = $numbers->filter(fn($n) => $n % 2 === 0);

dump($even->all()); // [2, 4]
