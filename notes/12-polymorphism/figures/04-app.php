<?php

// setup the message
$chimp = new MailChimp();
$chimp->from("fish@flap.com")
      ->subject("Faces")
      ->message("Hi, I like your face");

// send the message to everyone on the mailing list
$mailinglist->send($chimp);
