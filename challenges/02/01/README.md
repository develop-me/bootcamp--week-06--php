# Regex

## Challenges

**Create a new Git repo in a directory called `week-6--regex`. Every time you get a challenge working do a commit with a sensible message.**

Create a new file for each challenge. If a code block is provided, copy the provided code and then add your own code in the `// ... your code here` bit.

1) Create a function, `words`, that splits a sentence into just words:

1) Create a function, `threeOs`, that returns `true` if a string contains three of more `o` or `O` characters in a row. **Make sure it returns a boolean value**.

    ```
    <?php

    declare(strict_types=1);

    // … your function here

    var_dump(threeOs("Hello")); // bool(false)
    var_dump(threeOs("Helloo")); // bool(false)
    var_dump(threeOs("Hellooo")); // bool(true)
    var_dump(threeOs("HelloOoOo")); // bool(true)
    ```
