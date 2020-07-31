# Day 3: Morning

## Architecture

- Many OOP languages are pure objects (e.g. Java)
- PHP has to have a bit of procedural code to kick things off

    ```php
    $app = new Application();
    $app->start();
    ```
- Everything from then on is objects, talking to more objects
- Creates a cascade of behaviour
- Currently, all classes in one file

### Autoloading

- If we try to use a class in a different file it won't work
- Can tell PHP to load a file if it can't find a class

    ```php
    spl_autoload_register(function ($class) {
      require_once __DIR__ . "classes/{$class}.php";
    });
    ```

- But best to use a convention: PSR-4
- But first, namespaces


### Namespaces

- Can have two classes called the same thing as long as they're in different namespaces
- Like files in a directory
- `namespace` to declare the namespace
    - show used in different file with `require`
- `use` to use it multiple times
    - aliasing (with `as`)
    - use both classes

### PSR-4

- See `composer.json`
- Links `App` root namespace to `app` directory
    - Convention Laravel uses
    - Links namespace to sub-directories
    - Links class to filename
    - Capitalisation

---

- Final bootstrap:

```php
<?php

// include Composer for packages/autoloading
require_once __DIR__ . "/vendor/autoload.php";

// bootstrap code
// uses the Application class in the App namespace
$app = new App\Application();
$app->start();
```
