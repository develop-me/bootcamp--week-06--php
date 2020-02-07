<?php

$message = "Hello";

$say = function ($a) use ($message) {
    return "{$message} {$a}";
};

$result = $say("Wombat");
var_dump($result); // string(12) "Hello Wombat"
