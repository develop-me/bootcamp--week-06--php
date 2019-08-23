# Encapsulation

First, go back over all of the previous challenges this week and add appropriate type declarations to any methods where you pass in an object.

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

1) Create a class `App\Counter\Counter` which has an `increment` and `count` method. When you call `count` it should return the number of times that `increment` has been called.

    ```php
    public function counter()
    {
        echo "\n01)\n";

        $counter = new Counter\Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();

        dump($counter->count()); // 3
    }
    ```

1) Create a class `App\Counter\BeanCounter` which has an `addBean` and `howMany` method. It should accept an `App\Counter\Counter` object in the constructor. When you call `howMany` it should return the number of times that `addBean` has been called. Make sure you use the `Counter` class rather than rewriting the increment logic.

    ```php
    public function beanCounter()
    {
        echo "\n02)\n";

        $counter = new Counter\Counter();
        $beans = new Counter\BeanCounter($counter);
        $beans->addBean()->addBean();

        dump($beans->howMany()); // 2

        // don't worry too much about what this bit of code does
        // you just want it to echo "Not accepted. Good work!"
        // if you try to pass anything other than a Counter to BeanCounter
        try {
            new Counter\BeanCounter(12);
            dump("Accepted. Oops!"); // if you see this, something's not right
        } catch (\TypeError $e) {
            dump("Not accepted. Good work!"); // if you see this, you've done it right
        }
    }
    ```

1) Create the following three classes in the `App\Bike` namespace:

    - `Wheel`: should get passed a size (a number) and a "type". The "type" should be one of the following:

        - hybrid
        - road
        - town
        - mountain

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
