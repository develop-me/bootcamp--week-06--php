# Challenges

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

If you're working in a new directory (which you probably should):

- Make sure you install the `symfony/var-dumper` package with Composer and include `vendor/autoload.php` in each file

Create a new `.php` file for each challenge and call it something sensible. Copy the given boilerplate into the file. Only edit the file where it says "your class(es) here". Make sure you get the expected results.

You'll need to look at how the class is being used in the test code to work out how to write the class.

**Hint**: Remember, it's good practice to declare all of your properties at the top of the class and to make them private.

1) Go back over your previous classes and add chaining where appropriate. **Make sure you test everything still works**.

1) Create a class that represents a `Wombat`

    - You should be able to give the wombat a name when you create it.
    - The wombat should have a `getName()` method that returns its name
    - The wombat should have a `sayHelloTo($wombat)` method that you pass another wombat to and it will return a greeting
    - The wombat should have a `giveHug()` method and a `howManyHugs()` method. `howManyHugs()` should return the number of hugs the wombat has been given

    ```javascript
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    $tish = new Wombat("Tish");
    $fonny = new Wombat("Fonny");

    $tishName = $tish->getName();
    dump($tishName); // "Tish"

    $greeting = $tish->sayHelloTo($fonny);
    dump($greeting); // "Hello Fonny"

    $tish->giveHug();
    dump($tish->howManyHugs()); // 1

    $fonny->giveHug()->giveHug()->giveHug();
    dump($fonny->howManyHugs()); // 3
    ```


1) Create a class that performs a series of transformations on a string. You can use the `get()` method to get the final result.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your class here

    $string1 = new StringyRedux("Oop");
    dump($string1->lower()->repeat(2)->get()); // "oopoop"

    $string2 = new StringyRedux("Spoon");
    dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

    $string3 = new StringyRedux("Na");
    dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"
    ```


1) Create two classes `Basket` and `BasketItem`. `Basket` should have an `add` method which lets you add `BasketItem`s to the basket. It should have a `total` method that returns the value of all the items' prices. It should have an `items` method that returns an array of item names.

    **Hint**: PHP has a [`number_format`](http://php.net/number_format) function

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // ... your classes here

    $basket = new Basket();

    $item1 = new BasketItem("coffee", 3.50);
    $item2 = new BasketItem("tea", 2.50);

    $basket->add($item1);
    $basket->add($item2);

    dump($basket->total()); // £6.00
    dump($basket->items()); // ["coffee","tea"]
    ```

1) Create two classes, one that represents a recipe and one that represents an ingredient

    **Hint**: you can use `"\n"` to add a line break to a string

    **Hint**: PHP has [`array_search`](http://php.net/manual/en/function.array-search.php) and [`array_unique`](http://php.net/manual/en/function.array-unique.php) methods

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

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
    // using echo so it looks nicer
    echo $cake->display();
    /*
        "Cake

        Ingredients

        - 200g Flour
        - 100g Butter
        - 50g Sugar
        - 2 Eggs

        Method

        Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
     */

    // we can list dietary information
    dump($cake->dietary()); // "gluten, animal produce, dairy"

    // is the recipe vegan? (i.e. contains animal produce)
    dump($cake->vegan()); // false
    ```

    Try adding a few more ingredients/recipes to double check everything works.


## Static

First, read the Read-Only Chapter 8 on the `static` keyword. And then work through these challenges:


1) Create a `Person` class which takes a name and age in the constructor. Also create a `House` class which has an `addDweller()` method, which you can pass a person into. The house should keep track of its dwellers.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

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
    ```

    The `House` class should also have a static method called `census()` which you pass an array of `House` objects: it should return a flat array of all the `Person` objects those houses. It should have a static method called `averageAge` which you pass an array of `House` objects: it should return the average age of everyone in all the houses.

    **Hint**: PHP has an [`array_merge`](http://php.net/manual/en/function.array-merge.php) function

    ```php
    //...code from before

    // get back an array with all Person objects from the houses
    // the actual output will be a bit messier
    // but check it has the right number of people
    dump(House::census([$house1, $house2])); // [$carlton, $ida, $estelle, $jana]
    dump(House::census([$house2])); // [$estelle, $jana]

    // return the average ages of the houses
    dump(House::averageAge([$house1, $house2])); // 40.5
    dump(House::averageAge([$house1])); // 28.5
    ```


1) In your `Recipe` class, working out how to display the recipe takes quite a bit of processing. As does checking the dietary requirements. Update the `Recipe` class so that it caches the result of the `display()` and `dietary()` methods. Make sure the cache is cleared when you add a new ingredient or method.

    **Hint**: You can place some `echo` calls around the file to check if a bit of code is running multiple times.
