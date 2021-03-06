<?php

$numbers = collect([1, 2, 3, 4, 5]);

// remember, reduce takes two arguments
// the accumulator and each value in turn
// the initial value for $acc is null
// so make sure you set it
$sum = $numbers->reduce(fn($acc, $val) =>$acc + $val, 0);

dump($sum); // 15
