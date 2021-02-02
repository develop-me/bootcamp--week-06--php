# Day 4: Afternoon

### Inheritance
- `Mailer` parent class: with `to()` and `from()`, other two inherit and add `send()`
- Update `LocalMailServer` to use `Mailer`
- But could instance `Mailer`
- Abstract classes: make `Mailer` abstract
- Could create child with no `send()` method: abstract method
- Overriding the `to()` method in `MailChimp`
- Using `parent::` to call parent class

### Inheritance Tax
- Most books focus on inheritance
- As a result beginner OOPers try to use inheritance whenever two classes have similar behaviour
- Inheritance often means knowing about inside of an object
- Composition over inheritance
- Ok to inherit from library classes, they do most the work
- Don't start with an abstract class, write at least three classes that share identical code before using inheritance
- Use interfaces over inheritance
