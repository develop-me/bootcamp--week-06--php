# Day 2: Afternoon

## Why Objects?

- In large apps storing related bits of information becomes difficult
- Keeping related values and functionality together
- Show `mail()` function
    - `mailfn.php`
    - Adding functionality is tricky
    - Using globals? Even worse
- Show `mail()` using object (see `Mail.php`/`index.php`)
    - Easy to add extra stuff: add `bcc` array
    - All the info in one place

## Chaining

- Only if nothing else to return


## Object Oriented Programming

- Object Oriented Programming
- Using objects for all the things


## Bootstrapping

- Many OOP languages are pure objects (e.g. Java)
- PHP has to have a bit of procedural code to kick things off
    - `bootstrap.php`

    ```php
    $app = new Application();
    $app->start();
    ```
- Everything from then on is objects, talking to more objects
- Creates a cascade of behaviour


## Example

- Object don't have to be **things** (e.g. a car)
- Demonstrate `Mail` and `MailingList` talking to each other (use `Application.php`, `MailingList.php` and `Mail.php`)
- Single responsibility principle
- Law of Demeter
