# Singleton Design Pattern

## About the Singleton Design Pattern

Singletons create one-of-a-kind objects that have only one instance, ever. They are the easiest pattern to implement, but the reasons for using a singleton are nuanced and buck most OOP conventions. Singletons should be used when:

- **You can only have a single instance**: This is the defining characteristic of singletons. The constructor is private, so a user can not instantiate it.
- **You need to manage the state of this instance**: Any properties set on the object are available to anyone else using the object.
- **You do not care about initialization of this instance at runtime**: The object is not loaded into memory until it is used. This is a major difference of singletons vs global variables.
- **You need to access it across your application**: Any part of a program can access the object from a globally accessible space. This is no need to pass objects into difference scopes.

## Creating our first singlton

A core function of object-oriented programming is the ability of a class to be used as a pattern for instantiating multiple objects.

```php
class DBConnnect {
  protected function __construct() { }
}
$connection = new DBConnnect();
$database = new DBConnnect();
```

We can create as many objects as we want. Each one is a separate variable stored in memory. The variables can have unique properties and will be destroyed when they go out of scope. Making the constructor protected or private ensure that multiple instances of the object can not be created.

```php
class DBConnnect {
  protected function __construct() { }
}
$database = new DBConnnect();
// Fatal error: Call to protected Person...
```

We need a new way to instantiate the object. Static methods allow us to interact with the class directly. Additional logic can ensure only a single instance is ever created.

```php
class DBConnnect {
  private static $instance;
  protected function __construct() { }
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new DBConnnect();
    }
    return self::$instance;
  }
}
$database = DBConnnect::getInstance();
```

## But we rarely use this pattern

Singletons are great to learn but seldom used. There are other higher level patterns that offer the benefits of the singleton, but with additional programming support. For example, many implementations of the factory pattern will use a singleton-like mechanism to instantiate objects from a shared class; like a LoggerFactory.

Alex Miller's tech blog had a good article [_Patterns I Hate #1: Singleton_](https://web.archive.org/web/20120603233658/http://tech.puredanger.com/2007/07/03/pattern-hate-singleton) that reflects on the drawbacks of this pattern. Reasons to avoid singletons include:

1. Hides dependencies – A component that uses one or more singletons is hiding crucial information about your dependencies.
2. Hard to test – The hidden coupling of users on a singleton makes testing a nightmare as there is no way to mock out or inject a test instance of the singleton.
3. Hard to subclass – Since initialization occurs in a singleton in static code, it is not amenable to subclassing because subclasses inherit the initialization code without the chance to override it.
4. It’s a lie! – Each thread can have its own instance of the singleton. While not a problem for most work, as we move towards concurrent and multithreaded programming, the pattern offers less value.
5. A singleton today is a multiple tomorrow – It’s not at all unusual to discover that you now need 2 or more of something you previously only needed one of.

## Examples

- Singular interface: logging, database connection
- Global storage: App configuration, state management
