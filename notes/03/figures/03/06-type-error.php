<?php

// create a new mailing list
$mailinglist = new MailingList();

// ... code to set subject, from, add email addresses

// create a new mail object and pass in
$mail = new Mail();
$mailinglist->sendWith($mail);

// try to send with a Person
// won't work!
$mae = new Person("Mae", "Zimmerman");
$mailinglist->sendWith($mae); // TypeError!
