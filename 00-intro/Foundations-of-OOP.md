# Foundations of OOP

Object Oriented Programming is a computer programming model that organizes software into collections of data and functionality known as objects. For more than 50 years, this paradigm has grown within nearly every major programming language and found favor in large organization that lever the object model to organize work in a way that reflects the organization of their teams. There are four Pillars of Object Oriented Programming: Abstraction, Encapsulation, Inheritance, and Polymorphism.

## Abstraction

The main purpose of abstraction is hiding the unnecessary details from the users. An object “shows” only essential attributes and “hides” unnecessary information. Abstract classes help to describe generic types of behaviors and object-oriented programming class hierarchy.

```php
class Automobile {
	private function injectFuel() { ... }
  private function createSpark() { ... }
  private function openThrottle() { ... }
  private function moveBreakPads() { ... }
  public function turnOn() { ... }
  public function break() { ... }
}
```

## Encapsulation

Objects bind data and function together to keep safe from outside interference and misuse through encapsulation. Often this gives semantic meaning to the object by giving a sense of real-world identity (for better or worse.)

```php
class VideoGameFighter {
	private $health;
  private $stamina;
  private $mobility;
  private function decreaseHealth() { ... }
  private function increaseHealth() { ... }
  public function walk() { ... }
  public function run() { ... }
  public function jump() { ... }
  public function punch() { ... }
  public function kick() { ... }
  public function block() { ... }
}
```

## Inheritance

Creating a hierarchy among classes in a way that enables “children” (sub) classes to inherit and share variables and methods from “parent” classes. This can come in many forms: single inheritance (parent->child), multilevel inheritance (parent->child->grandchild...), multiple inheritance (parent1+parent2->child), and hierarchical inheritance, among others.

```php
// Hierarchical inheritance
class Pasta { ... }
class Long extends Pasta { ... }
class Fettuccine extends Long { ... }
class Spaghetti extends Long { ... }
class Filled extends Pasta { ... }
class Ravioli extends Filled { ... }
class Tortelloni extends Filled { ... }
```

```php
// Multiple inheritance
abstract Automobile { ... }
interface ElectricPowered { ... }
interface Truck { ... }
class SilveradoEV extends Automobile implements ElectricPowered, Truck { ... }
```

## Polymorphism

Describes the concept that you can access objects of different types through the same interface.

```php
abstract Pet {
  abstract public function greeting();
}
abstract Dog extends Animal {
  public function greeting() { return 'woof'; };
}
abstract Snake extends Animal {
  public function greeting() { return 'hiss'; };
}
abstract Cat extends Animal {
  public function greeting() { return 'judgemental stare'; };
}
```
