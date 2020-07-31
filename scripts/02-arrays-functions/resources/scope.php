<?php

$message = "Hello";

function sayHello($name) {
    $message = "Goodbye";
    return "{$message} {$name}";
}

dump(sayHello("Jim"));
dump($message);
