# Static

**If you haven't already, read the Read-Only Chapter 12 on Static Properties and Methods.**

## Setup

I'd suggest using PSR-4 namespacing to organise your files, but it's up to you. Please do check that the code works as expected somehow!

## Challenges

1) Create a class `Peep`. It should accept a name and birthdate (string). It should have a static method called `getAges()` which takes an array of `Person` objects and returns an array of ages.

    **Hint:** Look at [the docs for Collections](https://laravel.com/docs/master/collections) – lots of useful methods in there

    **Hint:** Use [Carbon](https://carbon.nesbot.com/docs/) to make working with dates more pleasant

    ```php
    $alfred = new Peep("Alfred", "1967-04-03");
    $jasmine = new Peep("Jasmine", "1954-12-28");
    $walker = new Peep("Walker", "1994-01-12");

    // the values below might be off by a bit as the current date
    // keeps on changing – sorry about that
    dump(Peep::getAges([$alfred, $jasmine, $walker])); // [53, 65, 26]
    dump(Peep::averageAge([$alfred, $jasmine, $walker])); // 48
    ```

2) Create a class `House`. It should have an `addDweller()` method that accepts a `Peep` object. It should have a static `census()` method that accepts an array of `House` objects and returns a list of the names of everyone in all the houses.

    ```php
    $alfred = new Peep("Alfred", "1967-04-03");
    $jasmine = new Peep("Jasmine", "1954-12-28");
    $walker = new Peep("Walker", "1994-01-12");

    $house1 = new House();
    $house1->addDweller($alfred);

    $house2 = new House();
    $house1->addDweller($jasmine)->addDweller($walker);

    $households = [$house1, $house2];

    dump(House::census($households)); // ["Alfred", "Jasmine", "Walker"]
    ```

## Tricksy

Think about the pros and cons of refactoring the static methods of `Peep` to instance methods of `House`, e.g.:

    ```php
    $house->getAges();
    $house->averageAge();
    ```

Do a Git commit and then give it a go. How could you avoid the static `census` method of `House`?

There's an ongoing debate in the world of OOP as to whether you should *ever* use static methods or whether you should use a hierarchy of classes instead.
