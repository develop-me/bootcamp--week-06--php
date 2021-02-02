# Encapsulation

1) Go back over *all* of your previous class-based challenges (`04-classes` and onwards) and add:

    - Parameter types
    - Return types
    - Make sure you're only using `private` properties

    **Make sure you run *every single file* to check it still works as it should.**

---


**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**


### Setup

- Follow the instructions for [this repo](https://github.com/develop-me/bootcamp--week-06--encapsulation-base)

### Instructions

For each question, create the class(es) in the correct namespace and then uncomment the call to the relevant method in your `Challenges` `start()` method.

To check your answers run `php bootstrap.php`.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

### Answers

[Answers on GitHub](https://github.com/develop-me/bootcamp--week-06--php/blob/main/challenges/07-encapsulation/answers)

## Challenges

**Hint**: You can use `dd()` instead of `dump()` to stop the PHP at a specific point. This can be useful if later lines are causing errors.

**Hint**: Use split view in VS Code so that you have `Challenges.php` on the right and the class that you're working on on the left. Then you can always see how your class is being used.

1) Create a class `App\Counter\Counter` which has an `increment` and `count` method. When you call `count` it should return the number of times that `increment` has been called.

    Uncomment line 16 of `app/Challenges.php` to run the following code:

    ```php
    $counter = new Counter\Counter();
    $counter->increment();
    $counter->increment();
    $counter->increment();

    dump($counter->count()); // 3
    ```

1) Create a class `App\Counter\BeanCounter` which has an `addBean` and `howMany` method. It should accept an `App\Counter\Counter` object in the constructor. When you call `howMany` it should return the number of times that `addBean` has been called. Make sure you use the `Counter` class rather than rewriting the increment logic.

    Uncomment line 17 of `app/Challenges.php` to run the following code:

    ```php
    $counter = new Counter();
    $beans = new BeanCounter($counter);
    $beans->addBean()->addBean();

    dump($beans->howMany()); // 2

    // don't worry too much about what this bit of code does
    // you just want it to echo "Not accepted. Good work!"
    // if you try to pass anything other than a Counter to BeanCounter
    try {
        BeanCounter(12);
        dump("Accepted. Oops!"); // if you see this, something's not right
    } catch (\TypeError $e) {
        dump("Not accepted. Good work!"); // if you see this, you've done it right
    }
    ```

1) Create a `Shelf` class in the `App\Library` namespace. Also copy across your `Book` class from the Autoloading challenges. `Shelf` should have an `addBook()` method which gets passed a `Book`. It should also have a `titles()` method, which lists the titles of all the books on the shelf.

    Uncomment line 18 of `app/Challenges.php` to run the following code:

    ```php
    $shelf = new Shelf();
    $shelf->addBook($book);
    $shelf->addBook(new Book("The Catcher in the Rye", 277));
    $shelf->addBook(new Book("Stamped from the Beginning", 582));

    dump($shelf->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning"]
    ```

1) Create a class `Library` in the `App\Library` namespace. It should have an `addShelf()` method, which takes a `Shelf` object. It should have a `titles()` method that lists all the titles of all the books on all the shelves in the library.

    Uncomment line 19 of `app/Challenges.php` to run the following code:

    ```php
    $library = new Library();
    $library->addShelf($shelf);

    $otherShelf = new Shelf();
    $otherShelf->addBook(new Book("The Power Broker", 1336));
    $otherShelf->addBook(new Book("Delusions of Gender", 338));

    $library->addShelf($otherShelf);

    dump($library->titles()); // ["Zero: The Biography of a Dangerous Idea", "The Catcher in the Rye", "Stamped from the Beginning", "The Power Broker", "Delusions of Gender"]
    ```


## Tricksy

1) Create the following three classes in the `App\Bike` namespace:

    - `Wheel`: should get passed a "size" (a number) and a "type" (a string). The "bikeType" should be one of the following:

        - "hybrid"
        - "road"
        - "town"
        - "mountain"

        If you try and pass in a different type it should ignore it.

    - `Frame`: should get passed a "variation" and a "material". The "variation" should be one of:

        - diamond
        - cantilever
        - folding
        - penny-farthing

        The "material" should be one of:

        - steel
        - carbon fibre
        - aluminium
        - bamboo

        If you try and pass in a different value it should ignore it.

    - `Bike`: should accept a `Frame` object. Should have an `addWheel` method which you pass a `Wheel` object - it should keep track of all the wheels added.

        It should also have a `describe` method which tells you: "I am a `frame-variation` framed bike. I am made of `frame-material`. I have `number-of-wheels` wheels"


    Uncomment line 13 of `app/Tricksy/Challenges.php` to run the following code:

    ```php
    public function bike()
    {
        echo "\n03)\n";

        // Create two new wheels
        $wheel1 = new Bike\Wheel(25, "hybrid");
        $wheel2 = new Bike\Wheel(27, "hybrid");

        // ignores invalid types
        $wheel1->setType("wombat");
        dump($wheel1->type()); // hybrid

        // Create a frame
        $frame = new Bike\Frame("diamond", "bamboo");

        // ignores invalid materials
        $frame->setMaterial("steel");
        $frame->setMaterial("wombat");
        dump($frame->material()); // steel

        // Create a bike, passing in the frame
        $bike = new Bike\Bike($frame);
        // Add wheels to the bike
        $bike->addWheel($wheel1)->addWheel($wheel2);

        dump($bike->describe()); // "I am a diamond framed bike. I am made of steel. I have 2 wheels"
    }
    ```
