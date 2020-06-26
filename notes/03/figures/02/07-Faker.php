<?php

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
dump($faker->name); // a random name
dump($faker->address); // a random address
dump($faker->text); // some lorem ipsum text
dump($faker->email); // a random email address
