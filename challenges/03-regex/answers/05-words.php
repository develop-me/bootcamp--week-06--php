<?php

require __DIR__ . "/vendor/autoload.php";

function words($str) {
    return preg_split("/[^\w]+/", $str);
}

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Jessica")); // ["Hello", "my", "name", "is", "Jessica"]
