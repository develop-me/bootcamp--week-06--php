<?php

declare(strict_types=1);

function zOrQ(string $str) : bool {
    return preg_match("/[zZqQ]/", $str) === 1;
}

var_dump(zOrQ("blah")); // bool(false)
var_dump(zOrQ("blqh")); // bool(true)
var_dump(zOrQ("bZ3h5")); // bool(true)
var_dump(zOrQ("bz3h5")); // bool(true)
