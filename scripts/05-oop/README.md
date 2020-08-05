# Day 2: Afternoon

- In large apps storing related bits of information becomes difficult
- Object Oriented Programming
- Using objects for all the things
    - keeping related values and functionality together

## Objectification

- Show `mail()` function
    - Adding functionality is tricky
    - Using globals? Even worse
- Show `mail()` using object (see `Mail.php`)
    - Easy to add extra stuff: add `bcc` array
    - All the info in one place
- Object don't have to be **things** (e.g. a car)
- Chaining
    - Only if nothing else to return

## Object-to-Object

- Demonstrate `Mail` and `MailingList` talking to each other (use `MailingList.php` and `Mail.php`)
    - **Do in same file**
    - Single responsibility principle
- Law of Demeter
