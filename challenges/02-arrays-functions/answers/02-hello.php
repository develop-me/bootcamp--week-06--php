<?php

require __DIR__ . "/vendor/autoload.php";

function hello($name) {
    return "hello {$name}";
}

dump(hello("alice")); // "hello alice"
dump(hello("bob")); // "hello bob"
