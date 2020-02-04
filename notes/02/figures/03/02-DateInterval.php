<?php

// an interval representing:
// 2 years, 3 months, 5 days, 6 hours, 2 minutes and 6 seconds
$interval = new DateInterval("P2Y3M5DT6H2M6S");

// a date now
$dt = new DateTime();

// add an interval to an existing date
// new DateTime, 2 years, 3 months (etc.) in the future
$future = $dt->add($interval); // new DateTime object
$future->format("Y-m-d H:i:s"); // e.g. "2022-05-09 21:24:08"

// subtract interval from a date
$past = $dt->sub($interval); // new DateTime object

// work out the difference between two dates
$birthday = new DateTime("1984-04-16");
$difference = $dt->diff($birthday);

// difference in years
$difference->y; // 35
