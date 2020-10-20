# Day 3: Morning

- Currently all classes in one file
- Can use `require` to pull in from another place

### Namespaces

- Can have two classes called the same thing as long as they're in different namespaces
- Like files in a directory
- `namespace` to declare the namespace
    - show used in different file with `require`
- `use` to use it multiple times
    - aliasing (with `as`)
    - use both classes

### PSR-4

- Set up composer.json

    ```json
    "autoload": {
      "psr-4": {"App\\": "app/"}
    }

    ```

- Links `App` root namespace to `app` directory
    - Convention Laravel uses
    - Links namespace to sub-directories
    - Links class to filename
    - Capitalisation
