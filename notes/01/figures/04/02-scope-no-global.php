<?php

$message = "Hello";

function sayHello($name) {
    return "{$message} {$name}";
}

var_dump(sayHello("Jim")); // " Jim"
