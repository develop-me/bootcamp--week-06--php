<?php

$message = "Hello";

$say = function ($a) use ($message) {
    return "{$message} {$a}";
};

$result = $say("Wombat");
dump($result); // "Hello Wombat"
