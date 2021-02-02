# Day 2: Morning

## Classes

### Basic Usage
- Often useful to group together values
    - Object literals/associative arrays let us group values
    - Like a person
- But also useful to group functionality on those values
    - e.g. to get an age based on a D.O.B.
- A class is an abstract representation of an object
    - Same properties
    - Same methods
    - **different** values
    - e.g. a "Mark" object and a "Ben" object
- Lets us create "instances"
- e.g. `Person` class lets us create instances representing different people
- Demo Person class
- Demonstrate using: `->` instead of `.`
- Mention PSR-2 Style

### Properties
- Demonstrate properties
    - Use `private` - will explain later
    - Use **getters** and **setters** - will explain later
    - Default values

### `$this`
- Demonstrate using `$this`
    - Properties: no `$` before property names
    - Methods

### Constructor

- Takes values passed from `new`
- Stores values on properties
- Don't need for default values
- Not necessary if not passing anything in and no setup to do
