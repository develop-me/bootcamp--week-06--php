# PHP Basics

---

## Challenges

**Create a new Git repo in a directory called `week-6--php-basics--02`. Every time you get a challenge working do a commit with a sensible message.**

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code/function here` bit.

Make sure you add parameter and return types to all your functions

1) Create a function, `joinWords`, that takes two strings as arguments. The function should return the two strings joined together with a space in between.

    ```php
    <?php

    declare(strict_types=1);

    function joinWords(string $firstWord, string $secondWord) : string {
        // … your code here
    };

    var_dump(joinWords("fish", "sticks")); // string(11) "fish sticks"
    var_dump(joinWords("hello", "world")); // string(11) "hello world"
    ```

1) Update `hello` so that it returns the string "hello *name*". Also add parameter and return types.

    ```php
    <?php

    declare(strict_types=1);

    // add parameter and return types
    function hello($name) {
        // … your code here
    };

    var_dump(hello("alice")); // string(11) "hello alice"
    var_dump(hello("bob")); // string(9) "hello bob"
    ```


1) Update `sameName` to return `true` if the associative arrays have the same `name` property and `false` if they have different names.

    ```php
    <?php

    declare(strict_types=1);

    function sameName (array $person1, array $person2) : bool {
        // … your code here
    };

    $a = [ "name" => "Alice", "age" => 52 ];
    $b = [ "name" => "Bob", "age" => 34 ];
    $c = [ "name" => "Charlie", "age" => 24 ];
    $d = [ "name" => "Bob", "age" => 97 ];

    var_dump(sameName($a, $b)); // bool(false)
    var_dump(sameName($b, $c)); // bool(false)
    var_dump(sameName($c, $d)); // bool(false)
    var_dump(sameName($b, $d)); // bool(true)
    ```

1) Create a function, `oap`, that takes an associative array with an `age` property. It should return `true` if the `age` property is greater than `65` otherwise it should return `false`.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    $a = [ "name" => "Alice", "age" => 52 ];
    $b = [ "name" => "Bob", "age" => 67 ];
    $c = [ "name" => "Charlie", "age" => 24 ];
    $d = [ "name" => "Bob", "age" => 97 ];

    var_dump(
        oap($a), // false
        oap($b), // true
        oap($c), // false
        oap($d), // true
    );
    ```

1) Create a function, `divide`, that takes two numbers as arguments. The function should return the first number divided by the second number.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(divide(4, 2)); // float(2)
    var_dump(divide(20, 2)); // float(10)
    var_dump(divide(5, 2)); // float(2.5)
    var_dump(divide(2.5, 0.5)); // float(5)
    ```

1) Create a function, `stone`, that takes a weight in kg and converts it to stone

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        stone(74), // float(11.65278)
        stone(50), // float(7.8735)
    );
    ```

1) Create a function, `average5`, that takes five numbers as arguments. The function should return the average of the numbers.


    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(average5(1, 2, 3, 4, 5)); // float(3)
    ```

1) Create a function, `even`, that takes a number as an argument. The function should return `true` if the number is even and `false` if it is odd.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(even(1)); // bool(false)
    var_dump(even(2)); // bool(true)
    ```

1) Create a function, `squares`, that takes an array of numbers as an argument. Return a new array containing the square of each number.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        squares([2, 3, 4]), // [4, 9, 16]
        squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
    );
    ```

1) Create a function, `average`, that takes an array of numbers as an argument. Return the average value of all the numbers.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        average([2, 3, 4, 5, 6]), // float(4)
        average([2, 3]), // float(2.5)
        average([10, 30]), // float(20)
        average([-4, -8, -9]), // float(-7)
    );
    ```

1) Create a function, `double`, that takes an array of numbers as an argument. Return a new array containing each number doubled.

    ```php
    <?php

    declare(strict_types=1);

    // … function

    var_dump(
        double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
        double([1, 2, 5]), // [2, 4, 10]
    );
    ```

1) Create a function, `timesBy`, that takes an array of numbers and a number as arguments. Return a new array containing each number in the array multiplied by the value of the second argument.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        timesBy([2, 3, 4, 5, 6], 10), // [20, 30, 40, 50, 60]
        timesBy([2, 3, 4], 5), // [10, 15, 20]
        timesBy([2, 3, 4, 5, 6, 7], -5), // [-10, -15, -20, -25, -30, -35]
        timesBy([-3, -4, -5, -6], -5), // [15, 20, 25, 30]
    );
    ```

1) Create a function, `largest`, that takes an array of numbers. Return the largest number.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        largest([2, 4, 6, 4, 7, 5]), // int(7)
        largest([-2, 4, 6, 4, 2, -7, 5]), // int(6)
        largest([-2, -4, -4, -7, -5]), // int(-2)
    );
    ```

1) Create a function, `sumBoth`, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

    **Hint**: to avoid repeating code, you might want to write a `sum` function that adds up the values in a *single* array and call that inside `sumBoth`

    ```php
    <?php

    declare(strict_types=1);

    // … your function(s) here

    var_dump(
        sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
        sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
    );
    ```

1) Create a function, `total`, that takes an **array** of shopping item **associative arrays** and adds their price together.

    ```php
    <?php

    declare(strict_types=1);

    function total(array $items) : float {
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

    var_dump(
        total($shoppingList), // float(9.3)
    );
    ```

## Tricksy Challenges

1) Create a function, `wow`, that takes a number, `n`, as an argument. The function should return the word "Wo...ow", where there are `n` "o"s.

    **Note**: only use things that you've been taught to solve this

    ```php
    <?php

    declare(strict_types=1);

    // … your function(s) here

    var_dump(wow(12)); // string(14) "Woooooooooooow"
    var_dump(wow(4)); // string(6) "Woooow"
    ```

1) Create a function, `both`, that takes two arrays. Return a new array containing any value that is in both arrays.

    **Hint**: stick to things you've been taught and try not to Google/Stack Oveflow it

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(
        both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
    );
    ```
