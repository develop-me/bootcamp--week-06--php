# PHP Basics

---

## Challenges

**Create a new Git repo in a directory for this week and use a sensible directory structure for the challenges. Every time you get a challenge working do a commit with a sensible message.**

[A guide to this week's setup](https://github.com/develop-me/bootcamp--week-06--php/tree/master/challenges)

- Make sure you install the `symfony/var-dumper` package with Composer and include `vendor/autoload.php` in each file
- Make sure `vendor` is added to your `.gitignore` file

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code here` bit.

1) Add up the numbers:

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    $number1 = 10;
    $number2 = 20;
    $number3 = 30;
    $number4 = 40;

    $sum = /* your code here */;
    dump($sum); // 100
    ```

1) Without changing the variable values, join the strings together with a space in between (create a separate file for each version):

    1. Using concatenation
    2. Using interpolation

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    $string1 = "I";
    $string2 = "like";
    $string3 = "to";
    $string4 = "boogie";
    $string5 = "boogie";

    $joined = /* your code here */;
    dump($joined); // "I like to boogie boogie"
    ```

1) Write some code that lists the numbers from 1 to 100 using a `for` loop.

    Example output:

    ```
    1
    2
    3
    4
    …
    100
    ```

1) Write some code that lists all multiples of 13 up to 1,000 using a `for` loop

    Example output:

    ```
    13
    26
    39
    52
    …
    988
    ```

1) Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

    Example output:

    ```
    6
    12
    18
    24
    …
    48
    ```


1) Write some code that outputs a cumulative total of the current line number for 1 to 50.

    e.g.

    - 1
    - 1 + 2
    - 1 + 2 + 3
    - 1 + 2 + 3 + 4
    - etc.

    Example output:

    ```
    1
    3
    6
    10
    ...
    1275
    ```

## FizzBuzz

- write some code that will output the numbers 1 to 100 in the console
- *unless* the number is divisible by 3, in which case output "Fizz"
- *or* the number is divisible by 5, in which case output "Buzz"
- *if* the number is divisible by 3 *and* 5, output "FizzBuzz"

The first lines of output should look like this:

```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
...
```

Make sure it's a nice elegant solution.


## Tricksy

1) Write some code that outputs 50 lines so that, if the current line number is *n*, the output is the total of the first *n* odd numbers.

    e.g.

    - 1
    - 1 + 3
    - 1 + 3 + 5
    - 1 + 3 + 5 + 7
    - etc.

    Example output:

    ```
    1
    4
    9
    16
    ...
    ```


1) Write some code that `dump`s the sum of the first 117 multiples of either 3 or 7.

    e.g. 3 + 6 + 7 + 9 + 12 + 14 + 15 + 18 + 21 + 24 ...

    The answer should be `16107`.


1) Write some code that outputs the first 15 times-tables.

    Example output:

    ```
    1    2    3    4    5    6    7    8    9    10   11   12   13   14   15
    2    4    6    8    10   12   14   16   18   20   22   24   26   28   30
    3    6    9    12   15   18   21   24   27   30   33   36   39   42   45
    ...
    15   30   45   60   75   90   105  120  135  150  165  180  195  210  225
    ```

    You'll want to use `echo` for this one.

    **Hint**: you'll need to use the newline character, `"\n"`, between your "rows"

    **Hint**: if you use a tab character, `"\t"`, between your "columns" it will look nice in the command line
