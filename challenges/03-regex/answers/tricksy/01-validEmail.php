<?php

require __DIR__ . "/../vendor/autoload.php";

function validEmail($str) {
    $trimmed = preg_replace("/(^\s+)|(\s+$)/", "", $str);
    return filter_var($trimmed, FILTER_VALIDATE_EMAIL) === $trimmed;
}

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true
