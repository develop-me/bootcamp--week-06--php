<?php

// use Composer autoloading
include_once __DIR__ . '/vendor/autoload.php';

// bootstrap code
use App\Challenges;

$challenges = new Challenges();
$challenges->start();
