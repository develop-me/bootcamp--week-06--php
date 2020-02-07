<?php

declare(strict_types=1);

function hasNumber(string $str) : bool {
    return preg_match("/\d/", $str) === 1;
}

var_dump(hasNumber("blah")); // bool(false)
var_dump(hasNumber("bl3h")); // bool(true)
var_dump(hasNumber("bl3h5")); // bool(true)
