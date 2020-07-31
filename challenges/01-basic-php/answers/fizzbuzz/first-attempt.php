<?php

require __DIR__ . "/../vendor/autoload.php";

for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        dump("FizzBuzz");
    } else if ($i % 3 === 0) {
        dump("Fizz");
    } else if ($i % 5 === 0) {
        dump("Buzz");
    } else {
        dump($i);
    }
}
