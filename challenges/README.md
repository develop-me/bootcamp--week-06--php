## Challenges Setup

We're going to use Git for the whole week, so first create a directory for this week and then run `git init`. You should then add a `.gitignore` file in that directory containing:

```.gitignore
vendor/
```

For each set of challenges, create a new directory. You should run the `composer require ...` command inside the directory for each set of challenges.

Your structure will looking something like:

```text
develop-me/
    week-06/
        .git
        .gitignore

        01-basic-php/
            vendor/
            composer.json
            composer.lock
            01-loopy.php
            ...

        02-arrays-functions/
            vendor/
            composer.json
            composer.lock
            01-funky.php
            ...

        ...
```

(Remember that `vendor/`, `composer.json`, `composer.lock` and `.git` are created for you)
