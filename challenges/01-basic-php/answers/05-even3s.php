<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 2; $i <= 50; $i += 2) {
    if ($i % 3 === 0) {
        dump($i);
    }
}
