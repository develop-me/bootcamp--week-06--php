# Challenges

### Setup

- Follow the instructions for [this repo](https://github.com/develop-me/bootcamp--week-06--oop-base)

### Instructions

Have a look at `bootstrap.php` and `app/Challenges.php` make make sure you understand how they are talking to each other.

For each question, create the class(es) in the correct namespace and then uncomment the call to the relevant method in your `Challenges` `start()` method.

To check your answers run `php bootstrap.php`.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

### Answers

[Answers on GitHub](https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/06-oop/answers)

## Challenges

**Hint**: You can use `dd()` instead of `dump()` to stop the PHP at a specific point. This can be useful if later lines are causing errors.

0) Go back over your previous classes and add chaining where appropriate. **Make sure you test everything still works**.

1) Create a class `Person` in the `App` namespace. It should accept a first and last name on creation. It should have a `sayHelloTo()` method that takes another `Person` and says hello to them. Make sure your properties are all private.

    Uncomment line 16 of `app/Challenges.php` to run the following code:

    ```php
    $person1 = new Person("Lynne",  "Ramsay");
    $person2 = new Person("Wes", "Anderson");

    dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
    dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"
    ```

1) Create a class that represents a `Wombat` in the `App\Marsupials` namespace

    - You should be able to give the wombat a name when you create it.
    - The wombat should have a `getName()` method that returns its name
    - The wombat should have a `sayHelloTo($wombat)` method that you pass another wombat to and it will return a greeting
    - The wombat should have a `giveHug()` method and a `howManyHugs()` method. `howManyHugs()` should return the number of hugs the wombat has been given

    Uncomment line 17 of `app/Challenges.php` to run the following code:

    ```javascript
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


1) Create a class, `Stringy` in the `App\Redux` namespace, that performs a series of transformations on a string. You can use the `get()` method to get the final result.

    Uncomment line 18 of `app/Challenges.php` to run the following code:

    ```php
    $string1 = new Stringy("Oop");
    dump($string1->lower()->repeat(2)->get()); // "oopoop"

    $string2 = new Stringy("Spoon");
    dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

    $string3 = new Stringy("Na");
    dump($string3->repeat(2)->append(" ")->repeat(8)->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa Batman!"
    ```


1) Create a new class `Basket` in the `App\Shopping` namespace and copy across your `BasketItem` class from the Autoloading challenges. `Basket` should have an `add` method which lets you add `BasketItem`s to the basket. It should have a `total` method that returns the value of all the items' prices. It should have an `items` method that returns an array of item names.

    Uncomment line 19 of `app/Challenges.php` to run the following code:

    ```php
    $basket = new Basket();

    $item1 = new BasketItem("coffee", 3.50);
    $item2 = new BasketItem("tea", 2.50);

    $basket->add($item1)->add($item2);

    dump($basket->total()); // £6.00
    dump($basket->items()); // ["coffee","tea"]
    ```


## Tricksy

Uncomment lines 23-24 of `app/Challenges.php` to get get the Tricksy code running.

1) Create a new class `Recipe` in the `App\Recipes` namespace and copy across your `Ingredient` class from the Autoloading challenges. The Recipe class should accept `Ingredient`s and generate a recipe.

    **Hint**: you can use `"\n"` to add a line break to a string

    Uncomment line 14 of `app/Tricksy/Challenges.php` to run the following code:

    ```php
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
    $cake->addIngredient($eggs, "2");

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


1) Many object-oriented programming languages include ways to treat objects as if they were a "scalar" type (a type with a single value, like a number or string). Create a new class, `SuperString`, in the `App\Tricksy` namespace.

    **Hint**: read the [`__toString()` documentation](http://www.php.net/manual/en/language.oop5.magic.php#object.tostring)

    Uncomment line 15 of `app/Tricksy/Challenges.php` to run the following code:

    ```php
    $string = new SuperString("hello");

    // chain a few methods together
    $string->titleCase()->append(",")->append(" ");

    // treat like a regular string
    dump($string . "World!"); // "Hello, World!"
    ```
