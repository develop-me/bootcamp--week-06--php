<?php

// this is fine
$this->doThing();

// this is fine
$this->mailer->send("Hello");

// this is not good
// the object needs to know how libraries
// and how books work
// this is *not* chaining
// get back a different object each call
$this->library->firstBook()->author();

// even worse
// using properties directly
// should stick to method calling
$this->library->books[0]->author;
