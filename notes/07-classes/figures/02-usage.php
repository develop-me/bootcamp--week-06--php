<?php

// create new Person object "instances"
// passing in the unique values when we create it
$mark = new Person("Mark", "Wales", "1984-04-16");
$ben = new Person("Ben", "Wales", "2018-08-24");

// we can call the getAge() method
$mark->getAge(); // 36
$ben->getAge(); // 1
