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

## Examples

- Singular interface: logging, database connection
- Global storage: App configuration, state management
