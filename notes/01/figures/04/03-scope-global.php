<?php

$message = "Hello";

function sayHello($name) {
    global $message;
    return "{$message} {$name}";
}

var_dump(sayHello("Jim")); // "Hello Jim"
