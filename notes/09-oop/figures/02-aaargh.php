<?php

// setup global variables
$to = null;
$from = null;
$message = null;
$subject = null;
$bcc = [];

function sendMail() {
  // ... use the global variables
}

// elsewhere
$to = "bob@bob.com";
$from = "hello@wombat.io";
$message = "Welcome to the best app for finding wombats near you";
$subject = "A Wombat Welcome";
$bcc = ["ada@lovelace.dev", "donald@knuth.horse"];

sendMail();
