<?php

use Carbon\Carbon;

// how old I am
dump(Carbon::createFromDate(1984, 4, 16)->age);

// the next summer olympics
dump((new Carbon("2016-08-05"))->addYears(4));
