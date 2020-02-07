<?php

// does the string contain one or more 'l' characters
preg_match("/l+/", "Hello"); // 1

// does the string *start* with one or more 'l' characters
preg_match("/^l+/", "Hello"); // 0

// does the string contain two words, separated by a space
preg_match("/\w\s+\w/", "Hello There World"); // 1

// does the string consist of *just* two words, separated by a space
preg_match("/^\w\s+\w$/", "Hello There World"); // 0
preg_match("/^\w\s+\w$/", "Hello Mum"); // 1
