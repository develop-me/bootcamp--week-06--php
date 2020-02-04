<?php

// a date now
$dt = new DateTime();

// output as a string
$dt->format("Y-m-d H:i:s"); // e.g. "2020-02-04 15:13:59"

// a date for a specific time
$dt = new DateTime("5th January 2020, 12:04:03");
$dt->format("d/m/Y @ H.i.s"); // "05/01/2020 @ 12.04.03"
