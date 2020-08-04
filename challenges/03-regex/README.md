# Regex

## Challenges

**Keep using Git! Every time you get a challenge working do a commit with a sensible message.**

If you're working in a new directory (which you probably should):

- Make sure you install the `symfony/var-dumper` package with Composer and include `vendor/autoload.php` in each file

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code here` bit.

**Use [RegExr.com](https://regexr.com) to test your patterns before writing the PHP**

- Make sure you switch it to "PCRE" mode
- Turn on the "multiline" flag


1) Create a function `hasNumber`, that returns `true` if the given string contains a digit.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    function hasNumber($str) {
        // … your code here
    }

    dump(hasNumber("blah")); // false
    dump(hasNumber("bl3h")); // true
    dump(hasNumber("bl3h5")); // true
    ```

1) Create a function, `mi5`, that returns `true` if the given string is `00` followed by a digit. **Make sure it returns a boolean value**:


    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(mi5("007")); // true
    dump(mi5("oo8")); // false
    dump(mi5("003")); // true
    dump(mi5("M")); // false
    ```

1) Create a function, `zOrQ`, that returns `true` if the given string contains the letter `q` or `z` (uppercase and lowercase):

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(zOrQ("blah")); // false
    dump(zOrQ("blqh")); // true
    dump(zOrQ("bZ3h5")); // true
    dump(zOrQ("bz3h5")); // true
    ```

1) Create a function `phoneNumber`, that returns `true` if the given string contains *only* numbers and hyphens:

    **Hint**: you can use both anchors (`^` and `$`) in the same regex

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(phoneNumber("blah")); // false
    dump(phoneNumber("12-323-5-344")); // true
    dump(phoneNumber("12-34-a334-43")); // false
    dump(phoneNumber("--123----23123")); // true
    ```

1) Create a function, `words`, that splits a sentence into just words:

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
    dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]
    ```

1) Create a function, `threeOs`, that returns `true` if a string contains three or more `o` or `O` characters in a row.

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(threeOs("Hello")); // false
    dump(threeOs("Helloo")); // false
    dump(threeOs("Hellooo")); // true
    dump(threeOs("HelloOoOo")); // true
    ```

## Tricksy

1) Create a function `validEmail` that takes a string, trims any whitespace at the beginning/end of the string (using `preg_replace`) and then returns if the trimmed string is a valid email:

    **Hint**: you can use `(` to group `)` parts of a regex and `|` as `or`

    ```php
    <?php

    require __DIR__ . "/vendor/autoload.php";

    // … your function here

    dump(validEmail(" blahf   ")); // false
    dump(validEmail(" blah@f")); // false
    dump(validEmail("blah@ fish.horse")); // false
    dump(validEmail(" blah@fish.horse")); // true
    dump(validEmail("blah@fish.horse ")); // true
    dump(validEmail(" blah@fish.horse ")); // true
    ```

---

## RegEx Crosswords

Try doing some [RegEx Crosswords](https://regexcrossword.com). Make sure you read the ["How to Play"](https://regexcrossword.com/howtoplay) example solution – otherwise it won't make any sense.
