<?php

require __DIR__ . "/vendor/autoload.php";

$string1 = "I";
$string2 = "like";
$string3 = "to";
$string4 = "boogie";
$string5 = "boogie";

$joined = "{$string1} {$string2} {$string3} {$string4} {$string5}";
dump($joined); // "I like to boogie boogie"
