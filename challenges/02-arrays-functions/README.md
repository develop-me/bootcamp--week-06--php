# PHP Basics

---

## Challenges

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

If you're working in a new directory (which you probably should):

- Make sure you install the `symfony/var-dumper` package with Composer and include `vendor/autoload.php` in each file

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code/function here` bit.

Make sure you add parameter and return types to all your functions

1) Create a function, `joinWords`, that takes two strings as arguments. The function should return the two strings joined together with a space in between.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    function joinWords($firstWord, $secondWord) {
        // … your code here
    };

    dump(joinWords("fish", "sticks")); // "fish sticks"
    dump(joinWords("hello", "world")); // "hello world"
    ```

1) Update `hello` so that it returns the string "hello *name*".

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    function hello($name) {
        // … your code here
    };

    dump(hello("alice")); // "hello alice"
    dump(hello("bob")); // "hello bob"
    ```


1) Update `sameName` to return `true` if the associative arrays have the same `name` property and `false` if they have different names.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    function sameName ($person1, $person2) {
        // … your code here
    };

    $a = [ "name" => "Alice", "age" => 52 ];
    $b = [ "name" => "Bob", "age" => 34 ];
    $c = [ "name" => "Charlie", "age" => 24 ];
    $d = [ "name" => "Bob", "age" => 97 ];

    dump(sameName($a, $b)); // false
    dump(sameName($b, $c)); // false
    dump(sameName($c, $d)); // false
    dump(sameName($b, $d)); // true
    ```

1) Create a function, `oap`, that takes an associative array with an `age` property. It should return `true` if the `age` property is greater than `65` otherwise it should return `false`.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    $a = [ "name" => "Alice", "age" => 52 ];
    $b = [ "name" => "Bob", "age" => 67 ];
    $c = [ "name" => "Charlie", "age" => 24 ];
    $d = [ "name" => "Bob", "age" => 97 ];

    dump(
        oap($a), // false
        oap($b), // true
        oap($c), // false
        oap($d), // true
    );
    ```

1) Create a function, `divide`, that takes two numbers as arguments. The function should return the first number divided by the second number.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(divide(4, 2)); // 2
    dump(divide(20, 2)); // 10
    dump(divide(5, 2)); // 2.5
    dump(divide(2.5, 0.5)); // 5
    ```

1) Create a function, `stone`, that takes a weight in kg and converts it to stone

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        stone(74), // 11.65278
        stone(50), // 7.8735
    );
    ```

1) Create a function, `average5`, that takes five numbers as arguments. The function should return the average of the numbers.


    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(average5(1, 2, 3, 4, 5)); // 3
    ```

1) Create a function, `even`, that takes a number as an argument. The function should return `true` if the number is even and `false` if it is odd.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(even(1)); // false
    dump(even(2)); // true
    ```

1) Create a function, `squares`, that takes an array of numbers as an argument. Return a new array containing the square of each number.

    - Try it using `foreach`
    - Try it using `collect()` (you'll need the `illuminate/support` package)

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        squares([2, 3, 4]), // [4, 9, 16]
        squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
    );
    ```

1) Create a function, `average`, that takes an array of numbers as an argument. Return the average value of all the numbers.

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        average([2, 3, 4, 5, 6]), // 4
        average([2, 3]), // 2.5
        average([10, 30]), // 20
        average([-4, -8, -9]), // -7
    );
    ```

1) Create a function, `double`, that takes an array of numbers as an argument. Return a new array containing each number doubled.

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … function

    dump(
        double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
        double([1, 2, 5]), // [2, 4, 10]
    );
    ```

1) Create a function, `timesBy`, that takes an array of numbers and a number as arguments. Return a new array containing each number in the array multiplied by the value of the second argument.

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
        timesBy([2, 3, 4], 5), // [10, 15, 20]
        timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
        timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
    );
    ```

1) Create a function, `largest`, that takes an array of numbers. Return the largest number.

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        largest([2, 4, 6, 4, 7, 5]), // 7
        largest([-2, 4, 6, 4, 2, -7, 5]), // 6
        largest([-2, -4, -4, -7, -5]), // -2
    );
    ```

1) Create a function, `sumBoth`, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

    **Hint**: to avoid repeating code, you might want to write a `sum` function that adds up the values in a *single* array and call that inside `sumBoth`

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function(s) here

    dump(
        sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
        sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
    );
    ```

1) Create a function, `total`, that takes an **array** of shopping item **associative arrays** and adds their price together.

    - Try it using `foreach`
    - Try it using `collect()`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    function total($items) {
        // … your code here
    };

    $shoppingList = [[
        "name" => "coffee",
        "price" => 3.50,
    ], [
        "name" => "tea",
        "price" => 2.50,
    ], [
        "name" => "toblerone",
        "price" => 3.20,
    ], [
        "name" => "newspaper",
        "price" => 0.10,
    ]];

    dump(
        total($shoppingList), // 9.3
    );
    ```

## Tricksy Challenges

1) Create a function, `wow`, that takes a number, `n`, as an argument. The function should return the word "Wo...ow", where there are `n` "o"s.

    **Note**: only use things that you've been taught to solve this

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function(s) here

    dump(wow(12)); // "Woooooooooooow"
    dump(wow(4)); // "Woooow"
    ```

1) Create a function, `both`, that takes two arrays. Return a new array containing any value that is in both arrays.

    **Hint**: stick to things you've been taught and try not to Google/Stack Oveflow it

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(
        both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
    );
    ```
