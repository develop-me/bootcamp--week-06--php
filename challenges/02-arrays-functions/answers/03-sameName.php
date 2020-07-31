<?php

require __DIR__ . "/vendor/autoload.php";

function sameName ($person1, $person2) {
    return $person1["name"] === $person2["name"];
}

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 34 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

dump(sameName($a, $b)); // false
dump(sameName($b, $c)); // false
dump(sameName($c, $d)); // false
dump(sameName($b, $d)); // true
