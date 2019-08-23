<?php

$mailinglist = new MailingList();

// oops, won't work
// Mailer doesn't have a send method
// so we'll get an error when sendWith()
// tries to call it
$mailinglist->sendWith(new Mailer());
