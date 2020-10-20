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
- Can add return types
- PHP will coerce values: can use "strict typing" – see link in notes
- class name, `int`, `float`, `string`, `bool`, `array`, `callable`
- `void`: better to return `$this`


### Type Systems

- Can create our own types
- Guarantees about our code
- Pass `Person` into `MailingList::send()`
- Add `Mail` to `MailingList`
- Tells us where the actual error is
- Encapsulation is preserved
