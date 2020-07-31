<?php

// registers an autoloader
// if a class name is used that PHP doesn't recognise
// it will call this function and pass in the class name
spl_autoload_register(function ($class) {
  // the function loads in a file
  // using the class name that was passed in
  require_once __DIR__ . "classes/{$class}.php";
});
