<?php

$numbers = collect([1, 2, 3, 4, 5]);

$squared = $numbers->map(fn($n) => $n * $n);

dump($squared->all()); // [1, 4, 9, 16, 25]
