# Day 1: Afternoon

## Regex

- **Use regexr.com to demonstrate**
    - Make sure to set it to PCRE
    - Use multi-line flag

- Way to search for a pattern
- Also in JS and other languages (native type)
- Bit crazy looking
- Demonstrate `/,\s*/` and `/^[a-z0-9_-]{3,16}$/`

### Parts

- Literal stings:
    - `wombat`
    - `kangaroo`

- Quantifiers:
    - `*`
    - `+`
    - `?`
    - `{3}`
    - `{3,}`
    - `{3,5}`

- Brackets
    - `kanga(ro)*`

- Character Sets & Ranges:
    - Character Sets:
        - Square brackets: any items in brackets
        - `[abc]`
        - `[^abc]`: **not** `a`, `b`, or `c`
    - Ranges:
        - Only inside character sets
        - `[a-z]`
        - `[A-Z]`
        - `[0-9]`
        - `[a-zA-Z0-9]`
    - `[0-9afg]`

- Special Characters
    - `\n`: new line
    - `\r`: carriage return
    - `\t`: tab
    - `\`: escape character
- Not just in Regexes
    
- Character Classes
    - `\s`: whitespace
    - `\S`: **not** whitespace
    - `\w`: word
    - `\W`: **not** word
    - `\d`: digit
    - `\D`: **not** digit

- Dot:
    - `.`: any character (not inside character set)
    - `\.`: the full-stop character

- Anchors
    - `^`: beginning
    - `$`: end

### In PHP

- **Switch to PHP file**
- Basic uses:
    - Searching
    - Splitting
    - Replacing
- `preg_match`:
    - e.g. `preg_match("/l+/", "Hello")`
    - `1` if success, `0` if failure, `false` if error
    - Always use `===` to check response
- `preg_split`
    - Splits a string into array of strings
    - e.g. `preg_split("/,\s*/", $csv)`
- `preg_replace`
    - e.g. `preg_replace("/\s+/", " ", "blah    blah blah   blah")`
    - Lots more to `preg_replace`: e.g. back references

- Flags
    - `i`: case insensitive
    - `m`: multi-line
    - `s`: dot *includes* new lines


### Alternatives

- `filter_var`
    - e.g. `filter_var("bob@bob.com", FILTER_VALIDATE_EMAIL)`
    - returns string if valid, `false` otherwise
    - Also `URL`, `DOMAIN`, and many others

### Dangers of Regex

- Only use for simple things
- If you can't understand it in one glance then it's too complicated
- It's not possible to do some things with RegEx - need a parser instead
    - e.g. parsing HTML tags
- https://stackoverflow.com/questions/1732348/regex-match-open-tags-except-xhtml-self-contained-tags/1732454#1732454
