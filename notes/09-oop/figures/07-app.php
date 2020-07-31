<?php

// create the mailing list
$mailinglist = new MailingList([
  "a@b.com",
  "c@d.com",
  "e@f.com"
]);

// setup the message
$mail = new Mail();
$mail->from("fish@flap.com")
     ->subject("Faces")
     ->message("Hi, I like your face");

// send the message to everyone on the mailing list
$mailinglist->send($mail);
