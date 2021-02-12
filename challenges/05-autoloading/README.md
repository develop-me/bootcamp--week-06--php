# Namespaces & Composer

### Setup

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

- Create a new project directory
- Add the `symfony/var-dumper` package
- Get Composer setup to use [PSR-4 auto-loading](https://www.php-fig.org/psr/psr-4/) with `App` as the root namespace pointing at the `app` directory
    - Don't worry if VS Code says there are missing "description" and "name" properties – it will still work
- Create a single `index.php` file in the **root** directory:

    ```
    app/
    vendor/
    composer.json
    index.php
    ```

- Include the Composer auto-loading code at the top of `index.php`

## Challenges

For each challenge, create the class in the **correct location** and then copy the given code **into `index.php`** (do **not** put the code inside the same file as the `class`). Your `index.php` file will [get quite long](answers/index.php).

**You should *only* run `php index.php` to check your code works** (i.e. don't try and run `php app/Hello.php`)

**Hint**: You can use `dd()` instead of `dump()` to stop the PHP at a specific point. This can be useful if later lines are causing errors.

**Hint**: Use split view in VS Code so that you have `index.php` on the right and the class that you're working on on the left. Then you can always see how your class is being used.

1) Put the following class in the `App` namespace:

    ```php
    class Hello
    {
        public function hello($name)
        {
            return "Hello {$name}";
        }
    }
    ```

    Then put this code in your `index.php` and check that it works by running `php index.php`:

    ```php
    echo "\nQuestion 1:\n";

    use App\Hello;

    $sayHi = new Hello();

    dump($sayHi->hello("Orb")); // "Hello Orb"
    dump($sayHi->hello("Horse")); // "Hello Horse"
    ```

1) Create a class `Potato` in the `App\Stuff\Things` namespace. It should have a `water()` and `hasGrown()` method. `hasGrown()` should return false until the `Potato` has been watered five or more times. Put the following in `index.php` and then check that you get back the right results:

    ```php
    echo "\nQuestion 2:\n";

    use App\Stuff\Things\Potato;

    $potato = new Potato();
    $potato->water();
    $potato->water();

    dump($potato->hasGrown()); // false

    $potato->water();
    $potato->water();
    dump($potato->hasGrown()); // false

    $potato->water();
    dump($potato->hasGrown()); // true

    $potato->water();
    $potato->water();
    dump($potato->hasGrown()); // true
    ```

1) Create a class `Book` in the `App\Library` namespace. It should take a title and its number of pages in the constructor. It should have a `read()` method, which takes a number of pages that have been read. It should also have a `currentPage()` page method which tells you which page you're currently on. Put the following in `index.php` and then check that you get back the right results:


    ```php
    echo "\nQuestion 3:\n";

    use App\Library\Book;

    $book = new Book("Zero: The Biography of a Dangerous Idea", 256);

    // read 12 pages
    $book->read(12);
    dump($book->currentPage()); // 13 - start on page 1

    // read another 25 pages
    $book->read(25);
    dump($book->currentPage()); // 38
    ```

1) Create a class `BasketItem` in the `App\Shopping` namespace. It should take a type and price in the constructor. It should have `type()`, `price()`, and `priceFormatted()` methods. Put the following in `index.php` and then check that you get back the right results:

    **Hint**: PHP has a [`number_format`](http://php.net/number_format) function

    ```php
    echo "\nQuestion 4:\n";

    use App\Shopping\BasketItem;

    $item = new BasketItem("coffee", 3.50);

    // get the type
    dump($item->type()); // "coffee"

    // get the price as a number
    dump($item->price()); // 3.5

    // get the price as a formatted string
    dump($item->priceFormatted()); // "£3.50"
    ```

1) Create a class `Ingredient` in the `App\Cooking` namespace. It should take a name and an array of dietary information in the constructor. It should have a `name()` method which returns the name of the ingredient and a `vegan()` method which returns whether the ingredient contains "animal produce" in its dietary information. Put the following in `index.php` and then check that you get back the right results:

    ```php
    echo "\nQuestion 5:\n";

    use App\Cooking\Ingredient;

    // ingredients take a name, followed by an array of dietary information
    $flour = new Ingredient("Flour", ["gluten"]);
    $eggs = new Ingredient("Eggs", ["animal produce"]);

    dump($flour->name()); // "Flour"
    dump($flour->vegan()); // true

    dump($eggs->name()); // "Eggs"
    dump($eggs->vegan()); // false
    ```
