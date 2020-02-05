<?php

declare(strict_types=1);

function sameName (array $person1, array $person2) : bool {
    return $person1["name"] === $person2["name"];
}

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 34 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

var_dump(sameName($a, $b)); // bool(false)
var_dump(sameName($b, $c)); // bool(false)
var_dump(sameName($c, $d)); // bool(false)
var_dump(sameName($b, $d)); // bool(true)
