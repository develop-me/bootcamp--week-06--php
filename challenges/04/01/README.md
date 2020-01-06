# Interfaces

### Setup

- Create a new project directory
- Get Composer setup to use auto-loading with `App` as the root namespace pointing at the `app` directory
- Add the `symfony/var-dumper` package
- Create a single `bootstrap.php` file in the **root** directory:

    ```
    app/
    vendor/
    composer.json
    index.php
    ```
- Include the Composer auto-loading file at the top of `bootstrap.php`
- Create a new class `Challenges` in the `App` namespace. It should have a `start` method.

    ```php
    public function start()
    {
        echo "\nChallenges\n";

        // call challenges here...
    }
    ```

- Add the following to `bootstrap.php`:

    ```php
    // bootstrap code
    use App\Challenges;

    $challenges = new Challenges();
    $challenges->start();
    ```

    You shouldn't need to add any other code to `bootstrap.php`

### Instructions

For each question, create the class(es) in the correct namespace and then copy the given code as a method in your `Challenges` class, then call the new method from the `start()` method. The `Challenges` class will get quite long and [look something like this](https://github.com/develop-me/week-08--laravel/blob/master/challenges/02/01/answers/app/Challenges.php).

To check your answers run `php bootstrap.php`.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

### Answers

[Answers on GitHub](https://github.com/develop-me/week-08--laravel/blob/master/challenges/02/01/answers)

## Challenges

1) Create a `ShapeInterface` with an `area()` method in the `App\Shapes` namespace. Then create three further classes which implement the interface: `Square`, `Circle`, and `Rectangle`. `Square` should be given a side length on construction, `Circle` should be given a radius, and `Rectangle` should be give a width and height.

    **Hint**: PHP has a [`pi`](http://php.net/manual/en/function.pi.php) function


    ```php
    public function shapes()
    {
        echo "\n01) Shapes\n";

        // create new shapes
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // log the areas of each
        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }
    ```

1) Create an `Extrude` class in the `App\Shapes` namespace. On construction it should take a class that implements `ShapeInterface` as well as a depth. It should have a `volume()` method which returns the volume (area &times; depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into `Extrude`.

    ```php
    public function extrude()
    {
        echo "\n02) Extrude\n";

        // create 2D objects
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // turn into 3D objects
        $cube = new Shapes\Extrude($square, 4);
        $cylinder = new Shapes\Extrude($circle, 4);
        $cuboid = new Shapes\Extrude($rectangle, 7);

        // log the volumes of each
        dump(
            $cube->volume(), // 64
            $cylinder->volume(), // 201.06192982975
            $cuboid->volume() // 140
        );

        try {
            new Shapes\Extrude($cube, 12); // shouldn't work
            dump("Accepted. Oops!"); // if you see this, something's not right
        } catch (\TypeError $e) {
            dump("Not accepted. Good work!"); // if you see this, you've done it right
        }
    }
    ```

1) Copy across your `Book`, `Shelf`, and `Library` classes from yesterday. Keep them in the `App\Library` namespace.

    Now create a `Titled` interface with a `public function title()` method signature.

    Update the `Shelf` class so that it can accept any sort of `Titled` class.

    Now create a `DVD` and `CD` class, that both implement the `Titled` interface.


    ```php
    public function library()
    {
        echo "\n03) Library\n";

        $shelf = new Library\Shelf();
        $shelf->addItem(new Library\Book("Zero: The Biography of a Dangerous Idea", 256));
        $shelf->addItem(new Library\DVD("Hunt for the Wilderpeople"));
        $shelf->addItem(new Library\CD("Teal Album"));

        $otherShelf = new Library\Shelf();
        $otherShelf->addItem(new Library\Book("The Power Broker", 1336));
        $otherShelf->addItem(new Library\DVD("Black Sheep"));

        $library = new Library\Library();
        $library->addShelf($shelf);
        $library->addShelf($otherShelf);

        dump($library->titles()); // array:5 [ 0 => "Zero: The Biography of a Dangerous Idea" 1 => "Hunt for the Wilderpeople" 2 => "Teal Album" 3 => "The Power Broker" 4 => "Black Sheep" ]
    }
    ```


## Tricksy

If you got to the tricksy challenges from earlier you don't need to do this setup again. Otherwise:

- Create a new class `Challenges` in the `App\Tricksy` namespace. It should have a `start` method.
- Add a `use` statement to your `App\Challenges` class:

    ```php
    use App\Tricksy\Challenges as Tricksy;
    ```

- Add the following to the `start()` method of your `App\Challenges` class:

    ```php
    // load Tricksy challenges
    $tricksy = new Tricksy();
    $tricksy->start();
    ```

### Instructions

As before, for each question, create the class(es) in the correct namespace and then copy and paste the given code as a method in your `App\Tricksy\Challenges` class, then call the new method from the `start()` method. The `Challenges` class will get quite long and [look something like this](https://github.com/develop-me/week-08--laravel/blob/master/challenges/02/01/answers/app/Tricksy/Challenges.php).

### Challenges

1) PHP has various built-in interfaces. One of these is called [`Iterator`](http://php.net/manual/en/class.iterator.php). If a class implements the `Iterator` interface you can use `foreach` with it. You'll need to read the `Iterator` documentation and look at the examples of each method.

    Create a class `Alphabet` in the `App\Tricksy` namespace, that implements the `Iterator` interface and then check that it works using `foreach`.

    **Hint**: PHP has a function [`chr`](http://php.net/manual/en/function.chr.php) that creates a character string from a character code. Remember, `A` is 65.

    ```php
    public function alphabet()
    {
        echo "\n01) Alphabet\n";

        // create new Alphabet object
        $alphabet = new Alphabet();

        // logs A -> Z on separate lines
        foreach ($alphabet as $letter) {
            dump($letter);
        }
    }
    ```

1) Create a class `Range` in the `App\Tricksy` namespace, that implements the `Iterator` interface and then check that it works using `foreach`.

    ```php
    public function range()
    {
        echo "\n02) Range\n";

        // create new Range object
        $range = new Range(10, 50);

        // logs 10 -> 50 on separate lines
        foreach ($range as $n) {
            dump($n);
        }

        // create new Range object
        $range = new Range(1, 5);

        // logs 1 -> 5 on separate lines
        foreach ($range as $n) {
            dump($n);
        }
    }
    ```
