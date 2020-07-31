# Day 1: Morning

## PHP

> I don't know how to stop it, there was never any intent to write a programming language ... I have absolutely no idea how to write a programming language, I just kept adding the next logical step on the way - Rasmus Lerdorf, Creator of PHP

- General purpose programming language
- Often used for server-side code
- Based loosely on Perl
- Originally written as a templating language
    - Personal Home Page
    - PHP: HyperText Preprocessor
- Now a fully functional OOP language
- C-style language, so similar to JS syntax
- Demonstrate running a PHP file
- Do `Hello, World!`
- **Never have anything before `<?php`**
    - Briefly demonstrate mixed with HTML
    - Now use templating languages like Blade/Twig
- Semi-colons are not optional
- Composer
- REPL: `composer global require psy/psysh`
- We'll be using `dump()` instead of `echo`
    - Better output for non-strings
    - `composer require symfony/var-dumper`
    - `composer.json` and `composer.lock`
    - `vendor` (`.gitignore` it)
    - `require __DIR__ . "/vendor/autoload.php";`
- PHP documentation: avoid user contributed notes!

### Variables

- Don't declare variables
- Makes it easy to accidentally change value of *existing* variables
- Must start with a `$`, then numbers, letters, underscores
- Generally use camelCase

### Types

- Same basic types as JS: numbers, booleans, strings
- Numbers:
    - Demonstrate
    - Knows the difference between `float` and `int`: `0.1 + 0.2 = 0.3`
    - Same operators as JS: `+`, `-`, `/`, `*`, `%`
    - Number functions: `floor`, `ceil`, `pow`, `mt_rand`
    - Still need to be careful: `floor((0.1 + 0.7) * 10)`
- Strings:
    - Double or single quotes
    - Interpolate in double: `$` *inside* curly braces
    - Generally use double
    - Concatenate with `.`
    - Functions:
        - `strtolower("Blah")`
        - `strtoupper("Blah")`
        - `trim("   Blah  ")`
        - `substr("Fishsticks", 4)`
- Booleans:
    - case-insensitive
    - use lowercase version
    - `&&`, `||` and `!`
    - `and` and `or` - different precedence, avoid
    - comparison operators: `===`, `!==`, `<=`, etc.
    - type-coercing versions: `==`, `!=` - avoid
    - falsy values: `false`, `0`, `""`, `NULL`, **and** `[]`


### Control Flow

- C-based, so similar to JS

#### Conditionals

- `if` are identical
    - `if`
    - `if else`
    - `else if`
- Ternary the same: expression
- Switch statements for checking same value

#### Loops

- `for` loop, same as JS - use if you know how many times to run
- `while` loop, same as JS
- `do while` loops
- Avoid infinite loops!
