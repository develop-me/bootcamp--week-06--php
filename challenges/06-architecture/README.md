# Namespaces & Composer

### Setup

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

- Create a new project directory
- Get Composer setup to use auto-loading with `App` as the root namespace pointing at the `app` directory
- Add the `symfony/var-dumper` package
- Create a single `bootstrap.php` file in the **root** directory:

    ```
    app/
    vendor/
    composer.json
    bootstrap.php
    ```
- Include the Composer auto-loading file at the top of `bootstrap.php`

### Instructions

For each question, create the class(es) in the correct namespace and then copy and paste the given code into `bootstrap.php`. Don't get rid of the previous questions, as some of them rely on each other's variables. You'll end up with a fairly long `bootstrap.php` file [like this](https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/06-architecture/answers/bootstrap.php). To check your answers run `php bootstrap.php`.

### Answers

[Answers on GitHub](https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/06-architecture/answers)


## Challenges

1) Create a class `Hello` in the `App` namespace. It should have a method called `hello` which accepts a string. **Don't overthink this one!** It's more about the namespaces than the class.

    ```php
    echo "\nQuestion 1:\n";

    use App\Hello;

    $sayHi = new Hello();

    dump($sayHi->hello("Orb")); // "Hello Orb"
    dump($sayHi->hello("Horse")); // "Hello Horse"
    ```

1) Create a class `Person` in the `App` namespace. It should accept a first and last name on creation. It should have a `sayHelloTo()` method that takes another `Person` and says hello to them. Make sure your properties are all private: so you'll need to a create `fullName()` method too.

    Use the class as follows in your `bootstrap.php`:

    ```php
    echo "\nQuestion 2\n";

    use App\Person;

    $person1 = new Person("Lynne",  "Ramsay");
    $person2 = new Person("Wes", "Anderson");

    dump($person1->sayHelloTo($person2)); // "Hello Wes Anderson"
    dump($person2->sayHelloTo($person1)); // "Hello Lynne Ramsay"
    ```

1) Create a class `Potato` in the `App\Stuff\Things` namespace. It should have a `water()` and `hasGrown()` method. `hasGrown()` should return false until the `Potato` has been watered five or more times.

    ```php
    echo "\nQuestion 3:\n";

    use App\Stuff\Things\Potato;

    $potato = new Potato();
    $potato->water()->water();

    dump($potato->hasGrown()); // false

    $potato->water()->water();
    dump($potato->hasGrown()); // false

    $potato->water();
    dump($potato->hasGrown()); // true

    $potato->water()->water();
    dump($potato->hasGrown()); // true
    ```


1) Create a class `Book` in the `App\Library` namespace. It should take a title and its number of pages in the constructor. It should have a `read()` method, which takes a number of pages that have been read. It should also have a `currentPage()` page method which tells you which page you're currently on.

    ```php
    echo "\nQuestion 4:\n";

    use App\Library\Book;

    $book = new Book("Zero: The Biography of a Dangerous Idea", 256);

    // read 12 pages
    $book->read(12);
    dump($book->currentPage()); // 13 - start on page 1

    // read another 25 pages
    $book->read(25);
    dump($book->currentPage()); // 38
    ```

1) Create a `Shelf` class. It should have an `addBook()` method which gets passed a `Book`. It should also have a `titles()` method, which lists the titles of all the books on the shelf.

    ```php
    echo "\nQuestion 5:\n";

    use App\Library\Shelf;

    $shelf = new Shelf();
    $shelf->addBook($book);
    $shelf->addBook(new Book("The Catcher in the Rye", 277));
    $shelf->addBook(new Book("Stamped from the Beginning", 582));

    dump($shelf->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning"]
    ```

1) Create a class `Library`. It should have an `addShelf()` method, which takes a `Shelf` object. It should have a `titles()` method that lists all the titles of all the books on all the shelves in the library.

    ```php
    echo "\nQuestion 6:\n";

    use App\Library\Library;

    $badLibrary = new Library();
    $badLibrary->addShelf($shelf);

    $otherShelf = new Shelf();
    $otherShelf->addBook(new Book("The Power Broker", 1336));
    $otherShelf->addBook(new Book("Delusions of Gender", 338));

    $badLibrary->addShelf($otherShelf);

    dump($badLibrary->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning", "The Power Broker", "Delusions of Gender"]
    ```


## Tricksy

If you haven't already, read the Read-Only Chapter 8 on Static Properties and Methods.

1) Create a class `Person` in the `App\People` namespace. It should accept a name and birthdate (string). It should have a static method called `getAges()` which takes an array of `Person` objects and returns an array of ages. Use the `map()` method of the `Illuminate\Support\Collection` class.

    Use the class as follows in your `bootstrap.php`:

    ```php
    echo "\nTricksy Question 1\n";

    use App\People\Person as Peep;

    $alfred = new Peep("Alfred", "1967-04-03");
    $jasmine = new Peep("Jasmine", "1954-12-28");
    $walker = new Peep("Walker", "1994-01-12");

    dump(Peep::getAges([$alfred, $jasmine, $walker])); // [52, 65, 15] (or there abouts)
    ```

1) Use [Faker](https://github.com/fzaninotto/Faker) to update the previous question to use generated names and birthdates. Run it a few times and you'll see that it changes values each time. Read through the documentation and see if you can make it use the same generated data each time.

1) Use the [Faker](https://github.com/fzaninotto/Faker) library to test the `email()` method of your `Validation` class from yesterday. Check it against 100 different generated email addresses.


## Über-Tricksy

1) [Twig](https://twig.symfony.com/doc/2.x/) is a package that lets you easily render HTML templates in PHP without needing to add any HTML into your PHP. Create a `Post` class in `App\Data\Post` that takes a title in the constructor. It should also have a `setArticle()` method that lets you set the article body.

    When the `render()` method of `Post` is called it should use Twig to render the following Twig template which you should store in `template.html`:

    ```html
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>{{ title }}</title>
        </head>
        <body>
            <h1>{{ title }}</h1>
            <p>{{ article}}</p>
        </body>
    </html>
    ```

    The usage code to add to `bootstrap.php`:

    ```php
    echo "\nTricksy Question 3\n";

    use App\Data\Post;

    $post = new Post("Blah");
    $post->setArticle("Blah blah blah");
    dump($post->render()); // big ole rendered HTML
    ```

    In a larger app you'd setup the Twig renderer elsewhere and pass it into the `Post` class, but for now just deal with setting up Twig in the `Post` class. If you use a `static` property you can cache the renderer so you don't need to recreate it every single time.

    **Hint**: `__DIR__` in PHP is a string that represents the directory that the current file is in
