<?php

// include the DatabaseConnection class
// assuming it's in the same directory
require_once "DatabaseConnection.php";

// create a new DatabaseConnection object
$db = new DatabaseConnection();

// get the connection
$connection = $db->setDB("tests")->connection("tests", "secret");
