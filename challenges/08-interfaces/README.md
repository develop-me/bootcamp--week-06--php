# Interfaces

### Setup

- Follow the instructions for [this repo](https://github.com/develop-me/bootcamp--week-06--interfaces-base)

### Instructions

For each question, create the class(es) in the correct namespace and then uncomment the call to the relevant method in your `Challenges` `start()` method.

To check your answers run `php bootstrap.php`.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

### Answers

[Answers on GitHub](https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/08-interfaces/answers)

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

        dump($library->titles()); // ["Zero: The Biography of a Dangerous Idea", "Hunt for the Wilderpeople", "Teal Album", "The Power Broker", "Black Sheep"]
    }
    ```


## Tricksy

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
