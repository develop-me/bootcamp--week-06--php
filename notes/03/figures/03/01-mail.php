<?php

// a sendMail function
function sendMail(string $to, string $from, string $message) {
  // ... send email
}

// elsewhere
sendMail(
  "bob@bob.com",
  "hello@wombat.io",
  "Welcome to the best app for finding wombats near you"
);
