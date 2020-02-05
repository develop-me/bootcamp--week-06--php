<?php

// as in JavaScript, use the "new" keyword to create
// a new object instance
$jim = new Person("Jim", "Henson", "1936-09-24");

// create another Person
$frank = new Person("Frank", "Oz", "1944-03-25");

// each object has its own properties
// so getAge() will return different values for each one
$jim->getAge();
$frank->getAge();
