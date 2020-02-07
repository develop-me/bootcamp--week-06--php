# Regex

## Challenges

**Create a new Git repo in a directory called `week-6--regex`. Every time you get a challenge working do a commit with a sensible message.**

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code here` bit.

**Use [RegExr.com](https://regexr.com) to test your patterns before writing the PHP** (Make sure you switch it to "PCRE" mode)


1) Create a function `hasNumber`, that returns `true` if the given string contains a digit:

    ```php
    <?php

    declare(strict_types=1);

    function hasNumber(string $str) : bool {
        // … your code here
    }

    var_dump(hasNumber("blah")); // bool(false)
    var_dump(hasNumber("bl3h")); // bool(true)
    var_dump(hasNumber("bl3h5")); // bool(true)
    ```

1) Create a function, `mi5`, that returns `true` if the given string is `00` followed by a digit:

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(mi5("007")); // bool(true)
    var_dump(mi5("oo8")); // bool(false)
    var_dump(mi5("003")); // bool(true)
    var_dump(mi5("M")); // bool(false)
    ```

1) Create a function, `zOrQ`, that returns `true` if the given string contains the letter `q` or `z` (uppercase and lowercase):

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(zOrQ("blah")); // bool(false)
    var_dump(zOrQ("blqh")); // bool(true)
    var_dump(zOrQ("bZ3h5")); // bool(true)
    var_dump(zOrQ("bz3h5")); // bool(true)
    ```

1) Create a function `phoneNumber`, that returns `true` if the given string contains *only* numbers and hyphens:

    **Hint**: you can use both anchors (`^` and `$`) in the same regex

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(phoneNumber("blah")); // bool(false)
    var_dump(phoneNumber("12-323-5-344")); // bool(true)
    var_dump(phoneNumber("12-34-a334-43")); // bool(false)
    var_dump(phoneNumber("--123----23123")); // bool(true)
    ```

1) Create a function, `words`, that splits a sentence into just words:

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
    var_dump(words("Hello, my name is Jessica")); // ["Hello", "my", "name", "is", "Jessica"]
    ```

1) Create a function, `threeOs`, that returns `true` if a string contains three of more `o` or `O` characters in a row. **Make sure it returns a boolean value**.

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(threeOs("Hello")); // bool(false)
    var_dump(threeOs("Helloo")); // bool(false)
    var_dump(threeOs("Hellooo")); // bool(true)
    var_dump(threeOs("HelloOoOo")); // bool(true)
    ```

## Tricksy

1) Create a function `validEmail` that takes a string, trims any whitespace at the beginning/end of the string (using `preg_replace`) and then returns if the trimmed string is a valid email:

    **Hint**: you can use `(` to group `)` parts of a regex and `|` as `or`

    ```php
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(validEmail(" blahf   ")); // bool(false)
    var_dump(validEmail(" blah@f")); // bool(false)
    var_dump(validEmail(" blah@fish.horse")); // bool(true)
    var_dump(validEmail("blah@fish.horse ")); // bool(true)
    var_dump(validEmail(" blah@fish.horse ")); // bool(true)
    ```
