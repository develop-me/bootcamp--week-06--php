<?php

$goodWatchin = collect([
  ["id" => 1, "name" => "Unbreakable Kimmy Schmidt"],
  ["id" => 2, "name" => "The Leftovers"],
  ["id" => 3, "name" => "Game of Thrones"],
]);

// [1, 2, 3]
dump($goodWatchin->pluck("id")->all());

// ["Unbreakable Kimmy Schmidt", "The Leftovers", "Game of Thrones"]
dump($goodWatchin->pluck("name")->all());
