# Inheritance

### Setup

- Follow the instructions for [this repo](https://github.com/develop-me/bootcamp--week-06--inheritance-base)

### Instructions

For each question, create the class(es) in the correct namespace and then uncomment the call to the relevant method in your `Challenges` `start()` method.

To check your answers run `php bootstrap.php`.

**Use Git to make a commit every time you get an answer working. Use sensible commit messages.**

### Answers

[Answers on GitHub](https://github.com/develop-me/bootcamp--week-06--php/blob/master/challenges/09-inheritance)

## Challenges

1) Create a class `Spoon` in the `App\Cutlery` namespace. It should have a `scoop()` method. When you call `howManyScoops()` it should tell you how many times it has been scooped. Also create a `RuncibleSpoon` class in the same namespace. It should `extend` the `Spoon` class. Override its `scoop()` method so that it does two scoops for each call of `scoop()`.

    ```php
    public function spoon()
    {
        echo "\n01) Spoon\n";

        $spoon = new Cutlery\Spoon();
        $runcible = new Cutlery\RuncibleSpoon();

        $spoon->scoop()->scoop();
        $runcible->scoop()->scoop();

        dump(
            $spoon->howManyScoops(), // 2
            $runcible->howManyScoops() // 4
        );
    }
    ```

1) Create an `abstract` class `Language` in the `App\Languages` namespace. It should have a `$name` property and a `name()` method, which returns the language name. It should declare an abstract `hello()` method. Then create three child classes:

    - `English`:
        - `name()`: "English"
        - `hello()`: "Hello"
    - `French`:
        - `name()`: "French"
        - `hello()`: "Bonjour"
    - `Arabic`:
        - `name()`: "Arabic"
        - `hello()`: "مرحبا"


    ```php
    public function languages()
    {
        echo "\n02) Languages\n";

        $english = new Languages\English();
        $french = new Languages\French();
        $arabic = new Languages\Arabic();

        dump(
            $english->name(), // "English"
            $english->hello(), // "Hello"

            $french->name(), // "French"
            $french->hello(), // "Bonjour

            $arabic->name(), // "Arabic"
            $arabic->hello() // "مرحبا"
        );
    }
    ```

1) Create a `Greeter` class in the `App\Greeter` namespace. It should take a `Language` object on creation. It should also have a `greet()` method which takes a name and gives back a greeting in the appropriate language.

    ```php
    public function greet()
    {
        echo "\n03) Greet\n";

        $english = new Languages\English();
        $french = new Languages\French();

        dump(
            (new Greeter\Greeter($english))->greet("Sandi"), // "Hello Sandi"
            (new Greeter\Greeter($french))->greet("Tom"), // "Bonjour Tom"
        );
    }
    ```

## Tricksy


1) Copy your `Person` class across from the namespace challenges and add it to the `App\Tricksy` namespace.

    Then create an abstract class `Vehicle` and three children classes `Car`, `Plane`, and `Boat` all in the `App\Tricksy\Vehicles` namespace.

    - `Car`:
        - `setDriver()`: takes a single Person object
        - `setPassengers()`: takes an array of Person objects
        - `listOccupants()`: lists the names of all occupants (driver + passengers) in alphabetical order (by first name)
    - `Plane`:
        - `setPilot()`: takes a single Person object
        - `setCopilot()`: takes a single Person object
        - `setStewards()`: takes an array of Person object
        - `setPassengers()`: takes an array of Person objects
        - `listOccupants()`: lists the names of all occupants (pilot + copilot + stewards + passengers) in alphabetical order (by first name)
    - `Boat`:
        - `setCaptain()`: takes a single Person object
        - `setPassengers()`: takes an array of Person objects
        - `listOccupants()`: lists the names of all occupants (captain + passengers) in alphabetical order (by first name)

    Structure your classes so there's as little repetition as possible.

    **Hint**: Laravel collections have a [`sort()`](http://laravel.com/docs/master/collections#method-sort) method

    ```php
    public function vehicles()
    {
        echo "\n01) Vehicles\n";

        $car = new Vehicles\Car();
        $plane = new Vehicles\Plane();
        $boat = new Vehicles\Boat();

        // setup $car
        $car->setDriver(new Person("Matt", "LeBlanc"))
            ->setPassengers([new Person("Sue", "Baker"), new Person("Tiff", "Needell")]);

        // setup $plane
        $plane->setPilot(new Person("Jacqueline", "Auriol"))
              ->setCopilot(new Person("Ringo", "Starr"))
              ->setStewards([new Person("Rod", "Steward"), new Person("Kristen", "Steward")])
              ->setPassengers([new Person("John", "Lennon"), new Person("Paul", "McCartney"), new Person("George", "Harrison")]);

        // setup $boat
        $boat->setCaptain(new Person("Captain", "Haddock"))
              ->setPassengers([new Person("Donald", "Duck"), new Person("Minnie", "Mouse"), new Person("Mickey", "Mouse")]);

        dump(
            $car->listOccupants(), // ["Matt LeBlanc", ... ]
            $plane->listOccupants(), // ["George Harrison", ... ]
            $boat->listOccupants() // ["Captain Haddock", ... ]
        );

        // set a different co-pilot
        $plane->setCopilot(new Person("Bob", "Dylan"));

        dump(
            $plane->listOccupants(), // ["Bob Dylan", ... ]
        );
    }
    ```
