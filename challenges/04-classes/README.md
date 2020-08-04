# Challenges

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

If you're working in a new directory (which you probably should):

- Make sure you install the `symfony/var-dumper` package with Composer and include `vendor/autoload.php` in each file

Create a new `.php` file for each challenge and call it something sensible. Copy the given boilerplate into the file. Only edit the file where it says "your class(es) here". Make sure you get the expected results.

You'll need to look at how the class is being used in the test code to work out how to write the class.

**Hint**: Remember, it's good practice to declare all of your properties at the top of the class and to make them private.

1) Create a class that represents a phone

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    // create three phones
    $iPhone = new Phone("Apple", "iPhone XS");
    $galaxy = new Phone("Samsung", "Galaxy");
    $retro = new Phone("Nokia", "3210");

    // use methods to find out model/make
    dump($iPhone->model()); // "iPhone XS"
    dump($retro->make()); // "Nokia"
    dump($galaxy->make()); // "Samsung"
    dump($iPhone->make()); // "Apple"
    ```

1) Create a class that represents a light switch

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    $lightSwitch = new LightSwitch();

    // you can check whether it is on or not
    dump($lightSwitch->isOn()); // false

    // you can turn it on
    $lightSwitch->turnOn();
    dump($lightSwitch->isOn()); // true

    // you can turn it off
    $lightSwitch->turnOff();
    dump($lightSwitch->isOn()); // false
    ```



1) Create a class that represents a car

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    // you pass in a make and number plate
    $car = new Car("Ford", "XY11 4TY");

    // you can get various bits of information about it
    dump($car->getNumberplate()); // "XY11 4TY"
    dump($car->getMake()); // "Ford"
    dump($car->getMileage()); // 0

    // you can add journey
    $car->addJourney(100);
    dump($car->getMileage()); // 100

    $car->addJourney(200);
    dump($car->getMileage()); // 300
    ```


1) Create a class that represents an address - use different properties for each part of the address. It should have a `fullAddress` method, which will return the full address as a nicely formatted string.

    **Hint**: PHP has an [`implode()`](http://php.net/manual/en/function.implode.php) function, which is similar to `join()` in JS

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your classes here

    $address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

    // logs the full address neatly
    dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

    // can update the street, postcode, and town
    $address->setStreet("12 Cantelope Way");
    $address->setPostcode("SW5 8RQ");
    $address->setTown("Swansea");

    // logs the new full address neatly
    dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"
    ```

1) Create a class that lets you do things with a string.

    **Hint**: you might want to look at the [PHP string functions](http://www.php.net/manual/en/ref.strings.php)

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your classes here

    $string = new Stringy("Na");

    // it can lowercase a string
    dump($string->lower()); // "na"

    // it can uppercase a string
    dump($string->upper()); // "NA"

    // it can concatenate
    dump($string->append("blah")); // "Nablah"

    // it can repeat a string
    dump($string->repeat(5)); // "NaNaNaNaNa"
    ```

1) Create a class that validates emails and postcodes.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    $validator = new Validator();

    // it validates email addresses
    echo "Email\n";
    dump($validator->email("alfonso@example.com")); // true
    dump($validator->email("wombat+12@spoons.plumbing")); // true
    dump($validator->email("blah blah blah! alfonso@example.com")); // false
    dump($validator->email("wombat@spoonsplumbing")); // false
    dump($validator->email("wombatspoons")); // false
    dump($validator->email("@wombatspoons")); // false

    // it validates postcodes
    echo "\nPostcode\n";
    dump($validator->postcode("BS4 3UH")); // true
    dump($validator->postcode("S10 4GR")); // true
    dump($validator->postcode("BS14 9DI")); // true
    dump($validator->postcode("SW1A 1AA")); // true
    dump($validator->postcode("12B DI9")); // false
    dump($validator->postcode("EST4 DD29")); // false
    dump($validator->postcode("blah blah BS5 8RJ blah blah")); // false
    ```

    You might want to use [Regexr](https://regexr.com) to test any regexes. Make sure you set it to use the PCRE engine.

    Here's the list of postcode test data:

    ```
    BS4 3UH
    S10 4GR
    BS14 9DI
    SW1A 1AA
    12B DI9
    EST4 DD29
    blah blah BS5 8RJ blah blah
    ```
