# Challenges

Create a new `.php` file for each challenge and call it something sensible. Copy the given boilerplate into the file. Only edit the file where it says "your class(es) here". Make sure you get the expected results. You'll notice we're using `var_dump()` and not `echo`: `echo` is only really useful for strings.

You'll need to look at how the class is being used in the test code to work out how to write the class.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

**Hint**: Remember, it's good practice to declare all of your properties at the top of the class and to make them private.

1) Create a class that represents a phone

    ```php
    <?php

    // ... your class here

    // create three phones
    $iPhone = new Phone("Apple", "iPhone XS");
    $galaxy = new Phone("Samsung", "Galaxy");
    $retro = new Phone("Nokia", "3210");

    // use methods to find out model/make
    var_dump($iPhone->model()); // string(9) "iPhone XS"
    var_dump($retro->make()); // string(5) "Nokia"
    var_dump($galaxy->make()); // string(7) "Samsung"
    var_dump($iPhone->make()); // string(5) "Apple"
    ```

1) Create a class that represents a light switch

    ```php
    <?php

    // ... your class here

    $lightSwitch = new LightSwitch();

    // you can check whether it is on or not
    var_dump($lightSwitch->isOn()); // bool(false)

    // you can turn it on
    $lightSwitch->turnOn();
    var_dump($lightSwitch->isOn()); // bool(true)

    // you can turn it off
    $lightSwitch->turnOff();
    var_dump($lightSwitch->isOn()); // bool(false)
    ```



1) Create a class that represents a car

    ```php
    <?php

    // ... your class here

    // you pass in a make and number plate
    $car = new Car("Ford", "XY11 4TY");

    // you can get various bits of information about it
    var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
    var_dump($car->getMake()); // string(4) "Ford"
    var_dump($car->getMileage()); // int(0)

    // you can add journey
    $car->addJourney(100);
    var_dump($car->getMileage()); // int(100)

    $car->addJourney(200);
    var_dump($car->getMileage()); // int(300)
    ```


1) Create a class that represents an address - use different properties for each part of the address. It should have a `fullAddress` method, which will return the full address as a nicely formatted string.

    **Hint**: PHP has an [`implode()`](http://php.net/manual/en/function.implode.php) function, which is similar to `join()` in JS

    ```php
    <?php

    // ... your classes here

    $address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

    // logs the full address neatly
    var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

    // can update the street, postcode, and town
    // using chaining
    $address->setStreet("12 Cantelope Way")
            ->setPostcode("SW5 8RQ")
            ->setTown("Swansea");

    // logs the new full address neatly
    var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"
    ```

1) Create a class that lets you do things with a string.

    ```php
    <?php

    // ... your classes here

    $string = new Stringy("Na");

    // it can lowercase a string
    var_dump($string->lower()); // string(2) "na"

    // it can uppercase a string
    var_dump($string->upper()); // string(2) "NA"

    // it can concatenate
    var_dump($string->append("blah")); // string(6) "Nablah"

    // it can repeat a string
    var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"
    ```

1) Create a class that validates emails and postcodes.

    ```php
    <?php

    // ... your class here

    $validator = new Validator();

    // it validates email addresses
    echo "Email\n";
    var_dump($validator->email("alfonso@example.com")); // bool(true)
    var_dump($validator->email("wombat+12@spoons.plumbing")); // bool(true)
    var_dump($validator->email("blah blah blah! alfonso@example.com")); // bool(false)
    var_dump($validator->email("wombat@spoonsplumbing")); // bool(false)
    var_dump($validator->email("wombatspoons")); // bool(false)
    var_dump($validator->email("@wombatspoons")); // bool(false)

    // it validates postcodes
    echo "\nPostcode\n";
    var_dump($validator->postcode("BS4 3UH")); // bool(true)
    var_dump($validator->postcode("S10 4GR")); // bool(true)
    var_dump($validator->postcode("BS14 9DI")); // bool(true)
    var_dump($validator->postcode("SW1A 1AA")); // bool(true)
    var_dump($validator->postcode("12B DI9")); // bool(false)
    var_dump($validator->postcode("EST4 DD29")); // bool(false)
    var_dump($validator->postcode("blah blah BS5 8RJ blah blah")); // bool(false)
    ```

1) Create a class that performs a series of transformations on a string. You can use the `get()` method to get the final result.

    ```php
    <?php

    // ... your class here

    $string1 = new StringyRedux("Oop");
    var_dump($string1->lower()->repeat(2)->get()); // string(6) "oopoop"

    $string2 = new StringyRedux("Spoon");
    var_dump($string2->repeat(2)->upper()->append("!")->get()); // string(11) "SPOONSPOON!"

    $string3 = new StringyRedux("Na");
    var_dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // string(48) "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"
    ```

## Tricksy Challenges

1) Create a `Person` class which takes a name and age in the constructor. Also create a `House` class which has an `addDweller()` method, which you can pass a person into. The house should keep track of its dwellers. The `House` class should have a static method called `census()` which you pass an array of `House` objects: it should return a flat array of all the `Person` objects those houses. It should have a static method called `averageAge` which you pass an array of `House` objects: it should return the average age of everyone in all the houses.

    **Hint**: PHP has an [`array_merge`](http://php.net/manual/en/function.array-merge.php) function

    ```php
    <?php

    // ... your classes here

    // create some people
    $carlton = new Person("Carlton", 25);
    $ida = new Person("Ida", 32);
    $estelle = new Person("Estelle", 57);
    $jana = new Person("Jana", 48);

    // create a house and put some peeps in
    $house1 = new House();
    $house1->addDweller($carlton)
           ->addDweller($ida);

    // create another house and put some other peeps in
    $house2 = new House();
    $house2->addDweller($estelle)
           ->addDweller($jana);

    // get back an array with all Person objects from the houses
    // the actual output will be a bit messier
    // but check it has the right number of people
    var_dump(House::census([$house1, $house2])); // array(4) [$carlton, $ida, $estelle, $jana]
    var_dump(House::census([$house2])); // array(2) [$estelle, $jana]

    // return the average ages of the houses
    var_dump(House::averageAge([$house1, $house2])); // float(40.5)
    var_dump(House::averageAge([$house1])); // float(28.5)
    ```


1) Create an class that represents a shopping basket. It should have a property, `items`, that keeps track of the items in the basket. It should have an `add` method to add items to the basket. It should have a `total` method that returns the value of all the items' prices. It should have a `items` method that returns an array of item names.

    **Hint**: basket items will need to be an class too

    **Hint**: PHP has a [`number_format`](http://php.net/number_format) function

    ```php
    <?php

    // ... your classes here

    $basket = new Basket();

    $item1 = new BasketItem("coffee", 3.50);
    $item2 = new BasketItem("tea", 2.50);

    $basket->add($item1);
    $basket->add($item2);

    var_dump($basket->total()); // string(6) £6.00
    var_dump($basket->items()); // array(2) { [0]=> string(6) "coffee" [1]=> string(3) "tea" }
    ```

1) Create two classes, one that represents a recipe and one that represents an ingredient

    **Hint**: you can use `"\n"` to add a line break to a string

    **Hint**: PHP has [`array_search`](http://php.net/manual/en/function.array-search.php) and [`array_unique`](http://php.net/manual/en/function.array-unique.php) methods

    ```php
    <?php

    // ... your classes here

    // ingredients take a name, followed by an array of dietary notes
    $flour = new Ingredient("Flour", ["gluten"]);
    $eggs = new Ingredient("Eggs", ["animal produce"]);
    $sugar = new Ingredient("Sugar", []);
    $butter = new Ingredient("Butter", ["dairy", "animal produce"]);

    // a recipe takes a name
    $cake = new Recipe("Cake");

    // we can add ingredients plus amounts
    $cake->addIngredient($flour, "200g");
    $cake->addIngredient($butter, "100g");
    $cake->addIngredient($sugar, "50g");
    $cake->addIngredient($eggs, 2);

    // we can add a method
    $cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

    // we can see the recipe
    var_dump($cake->display());
    /*
        string(146) "Cake

        Ingredients

        - 200g Flour
        - 100g Butter
        - 50g Sugar
        - 2 Eggs

        Method

        Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
     */

    // we can list dietary information
    var_dump($cake->dietary()); // string(29) "gluten, animal produce, dairy"

    // is the recipe vegan? (i.e. contains animal produce)
    var_dump($cake->vegan()); // bool(false)
    ```

    Try adding a few more ingredients/recipes to double check everything works.


1) In your `Recipe` class, working out how to display the recipe takes quite a bit of processing. As does checking the dietary requirements. Update the `Recipe` class so that it caches the result of the `display()` and `dietary()` methods. Make sure the cache is cleared when you add a new ingredient or method.

    **Hint**: You can place some `echo` calls around the file to check if a bit of code is running multiple times.
