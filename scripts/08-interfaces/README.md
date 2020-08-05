# Day 4: Morning

### Polymorphism
- What if we want `LocalMailServer` and `MailChimp`?
- Two classes have *enough* in common to be used in a specific context
- Interfaces
- Inheritance

### Interfaces
- Create `MailerInterface`
- Update `MailingList`
- Class can implement multiple interfaces, only have one parent
- Message passing: methods and parameters - proper encapsulation

    > I'm sorry that I long ago coined the term ``objects'' for this topic because it gets many people to focus on the lesser idea. The big idea is ``messaging'' ... The key in making great and growable systems is much more to design how its modules communicate rather than what their internal properties and behaviours should be - Alan Kay, Father of OOP

- Inheritance often means knowing about inside of an object
