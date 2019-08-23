# Inheritance

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

- Create a new class `Challenges` in the `App\Tricksy` namespace. It should have a `start` method.

    ```php
    public function start()
    {
        echo "\nTricksy Challenges\n";

        // call tricksy challenges here...
    }
    ```

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

1) Copy your `Person` class across from the last set of challenges and add it to the `App\Tricksy` namespace.

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
            $car->listOccupants(), // array(3) [ 0 => "Matt LeBlanc", ... ]
            $plane->listOccupants(), // array(7) [ 0 => "George Harrison", ... ]
            $boat->listOccupants() // array(4) [ 0 => "Captain Haddock", ... ]
        );

        // set a different co-pilot
        $plane->setCopilot(new Person("Bob", "Dylan"));

        dump(
            $plane->listOccupants(), // array(7) [ 0 => "Bob Dylan", ... ]
        );
    }
    ```
