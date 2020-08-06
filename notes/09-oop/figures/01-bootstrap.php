<?php

// include Composer for packages/autoloading
require_once __DIR__ . "/vendor/autoload.php";

// bootstrap code
// uses the Application class in the App namespace
$app = new App\Application();
$app->start();
