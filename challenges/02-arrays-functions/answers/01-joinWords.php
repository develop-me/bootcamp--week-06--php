<?php

require __DIR__ . "/vendor/autoload.php";

function joinWords ($firstWord, $secondWord) {
    return $firstWord . " " . $secondWord;
}

dump(joinWords("fish", "sticks")); // "fish sticks"
dump(joinWords("hello", "world")); // "hello world"
