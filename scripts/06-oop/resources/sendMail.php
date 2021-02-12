<?php

function sendMail($to, $from, $subject, $message) {
    echo "\nSending...\n\nTo: {$to}\nFrom: {$from}\nSubject: {$subject}\n\n{$message}\n";
}


sendMail("bob@bob.com", "wombats@wombats.horse", "Welcome to WombatWorld", "Hi! Click on the thing");
