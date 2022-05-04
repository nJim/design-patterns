# OOP Design Patterns

Welcome to Computer Science Practice group. Today is the kickoff for a series of presentation on object oriented design patterns. We will be following the O’Reilly book [Head First Design Patterns](https://bookshop.org/books/head-first-design-patterns-building-extensible-and-maintainable-object-oriented-software/9781492078005) to level up our OOP skills and to challenge ourselves to build more maintainable software. We will also discuss when to use these patterns, when to avoid them, and look for places in our current project where these patterns are already in action.

Someone has already solved your problems. Design Patterns are a general purpose abstraction of a problem, which can be applied to a specific solution. As developers we tend to solve the same program over and over again; so, why reinvent the wheel? These patterns create a shared language that empower teams and allow others to onboard quickly and share work readily.

## Getting Started with the Strategy Pattern

- [Foundations of OOP](00-intro/foundations-of-oop.md): Look at the four Pillars of Object Oriented Programming: Abstraction, Encapsulation, Inheritance, and Polymorphism. These describe the features of OOP but are not inherently a good are bad programming paradigm.
- [Classes and objects](01-class-and-objects/final.php): Create a simple class and instantiate an object from it. This Duck class becomes the foundation for today's discussion.
- [Abstraction](02-abstraction/final.php): Reorganize the Duck class to have multiple children. Apply the principles of abstraction to hide unnecessary and redundant methods from the child classes.
- [Fragile Base Class Problem](03-fragile-base-class/final.php): We've all been there. Our best efforts to organize a hierarchy of classes begins to fall apart as change is introduced. Inheritance start to prevent work from being organized in a meaningful way. It's not appropriate for all subclasses to have all of the parent methods.
- [Interfaces](04-interfaces/final.php): Identify the aspects of the application that vary and separate them from what stays the same. This is the start of encapsulation using interfaces.
- [Encapsulation](05-encapsulate/final.php): Behaviors are created to encapsulate the parts of the system that change. Various strategies are cerated for each behavior -- programming to the interface, not to the implementation.
- [Strategy Pattern](06-strategy/strategy-pattern.md): Sunrise! We secretly completed our first design pattern. Discuss the Strategy Design Pattern and related takeaways from this exercise.
