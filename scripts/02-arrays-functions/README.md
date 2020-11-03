# Day 1: Late Morning

## Functions

- Same as in JS: reuse a bit of code
- Written like old-style function

### Scope

- Don't declare variables
- Variables inside a function are assumed to be local
    - Demonstrate: `scope.php`
- Harder to write impure functions

### Anonymous Functions

- Can assign to a variable
    - Need to use `$` to call, stored in variable
- Can pass to functions
    - e.g. `array_map($fn, $arr)`
    - A "callable"
- Need to use `use` keyword to access variables
    - Usually used inside methods
    - Read only
- In PHP 7.4+ – fat arrow functions: `array_map(fn($value) => $value * $multiplyBy, [1, 2, 3]);`


## Arrays

- Numerically indexed and associative
- Passed by value

### Numerical

- Same as JS
- Add to end `$values[] = 6`
- Length: `count($values)`
- Arrays *aren't* object, so don't have methods, lots of functions
- Old-skool: `array(1, 2, 3, 4, 5)`

### Associative

- Key-value pairing: basically object literals
- Very different syntax to object literals in JS
- All arrays are associative
    - Be careful not to mix!

### Iterating

- `foreach`
    - just with value
    - with key too
    - key is index for numerical array
- Collections:
    - `composer require illuminate/support`
    - demonstrate `map`, `filter`, `reduce` and `pluck`
    - `all()` to get back array
    - using an object under the hood
