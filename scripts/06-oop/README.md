# Day 2: Afternoon

## Why Objects?

- In large apps storing related bits of information becomes difficult
- Keeping related values and functionality together
- Show `mail()` function
    - `sendMail.php`
    - Adding functionality is tricky
    - Using globals? Even worse
- Show `mail()` using object (see `Mail.php`/`index.php`)
    - Easy to add extra stuff: add `bcc` array
    - All the info in one place


## Object Oriented Programming

- Object Oriented Programming
- Using objects for all the things

## Bootstrapping

- Many OOP languages everything is a class (e.g. Java)
- PHP has to have a bit of procedural code to kick things off
    - `bootstrap.php`

    ```php
    $app = new Application();
    $app->start();
    ```
- Everything from then on is objects, talking to more objects
- Creates a cascade of behaviour

## Chaining

- Return `$this` from any method without a sensible return value
- Keeps things tidier
- Add chaining to `Mail` and update `Application`


## Example

- Object don't have to be **things** (e.g. a car)
- Demonstrate `Mail` and `MailingList` talking to each other (use `Application.php`, `MailingList.php` and `Mail.php`)


## Principles

- Single responsibility principle
- Law of Demeter
