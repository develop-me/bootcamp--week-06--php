<?php

declare(strict_types=1);

function words(string $str) : array {
    return preg_split("/[^\w]+/", $str);
}

var_dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
var_dump(words("Hello, my name is Jessica")); // ["Hello", "my", "name", "is", "Jessica"]
