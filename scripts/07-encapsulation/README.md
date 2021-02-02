# Day 3: Afternoon

## Encapsulation

- Don't want to remember how every object works
- Function composition: Create complexity by joining together simple things
- Encapsulation: using visibility to limit how an object can be used
- Visibility: `public`, `private`, and `protected`
- Public: surface area
- Private: inner-workings, insides
- Show as little surface as possible: less to remember
- If insides are outside, shit goes everywhere
- So make everything private unless it has to be public (e.g. getters and setters)


## Safe Code

- If we have `public` properties can change them to anything, lost safety

    ```php
    $mail = new Mail();
    $mail->to = 12;
    ```

    Would break when `mail()` used, breaks encapsulation

- Can add parameter types
    - `$mail->bcc("blah")`
    - `int`, `float`, `string`, `bool`, `array`, `callable`
- PHP will coerce values: can use "strict typing"
    - `$mail->to(12)`
    - `declare(strict_typing=1)` at top (before namespace) of file that *uses* the class
    - Put in all your files
- Can also add return types
    - `void`: better to return `$this`
- Property types


### Type Systems

- Can create our own types
- Guarantees about our code
- Pass `Person` into `MailingList::send()`
- Add `Mail` to `MailingList`
- Tells us where the actual error is
- Encapsulation is preserved
