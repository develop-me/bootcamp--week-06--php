<?php

require __DIR__ . "/vendor/autoload.php";

$mail = new App\Mail();

// set properties
$mail->to("bob@bob.com");
$mail->from("hello@wombat.io");
$mail->subject("A Wombat Welcome");
$mail->message("Welcome to the best app for finding wombats near you");

// send
$mail->mail();
