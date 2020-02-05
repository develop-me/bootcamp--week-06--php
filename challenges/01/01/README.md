# PHP Basics

---

## Challenges

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code here` bit.

1) Add up the numbers:

    ```php
    <?php

    $number1 = 10;
    $number2 = 20;
    $number3 = 30;
    $number4 = 40;

    $sum = /* your code here */;
    var_dump($sum); // int(100)
    ```

1) Without changing the variable values, join the strings together with a space in between (create a separate file for each version):

    1. Using concatenation
    2. Using interpolation

    ```php
    <?php

    $string1 = "I";
    $string2 = "like";
    $string3 = "to";
    $string4 = "boogie";
    $string5 = "boogie";

    $joined = /* your code here */;
    var_dump($joined); // string(23) "I like to boogie boogie"
    ```

1) Write some code that lists the numbers from 1 to 100 using a `for` loop.

    Example output:

    ```
    int(1)
    int(2)
    int(3)
    int(4)
    …
    int(100)
    ```

1) Write some code that lists all multiples of 13 up to 1,000 using a `for` loop

    Example output:

    ```
    int(13)
    int(26)
    int(39)
    int(52)
    …
    int(988)
    ```

1) Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

    Example output:

    ```
    int(6)
    int(12)
    int(18)
    int(24)
    …
    int(48)
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
    int(1)
    int(3)
    int(6)
    int(10)
    ...
    int(1275)
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

You'll want to use `echo` to get clean output, but make sure you add "\n" on the end of each line, otherwise they will all appear on one line.

```php
echo $i . "\n";
```

Feel free to use your JavaScript solution as a guide (or even copy and paste it, then update the syntax).

Having already solved this in JavaScript, you shouldn't have to rethink any of the logic - just the syntax.


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
    int(1)
    int(4)
    int(9)
    int(16)
    ...
    ```


1) Write some code that `var_dump`s the sum of the first 117 multiples of either 3 or 7.

    e.g. 3 + 6 + 7 + 9 + 12 + 14 + 15 + 18 + 21 + 24 ...


1) Write some code that outputs the first 15 times-tables.

    Example output:

    ```
    1    2    3    4    5    6    7    8    9    10   11   12   13   14   15
    2    4    6    8    10   12   14   16   18   20   22   24   26   28   30
    3    6    9    12   15   18   21   24   27   30   33   36   39   42   45
    ...
    15   30   45   60   75   90   105  120  135  150  165  180  195  210  225
    ```

    **Hint**: if you use a tab character, `"\t"`, between your "columns" it will look nice in the command line

    **Hint**: if you use `echo` you'll need to add a new line character, `"\n"`, at the end of each line
