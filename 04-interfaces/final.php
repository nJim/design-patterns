<?php

/**
 * Duck Class
 *
 * The duck can display, quack, and swim.
 */
abstract class Duck {
  // All ducks display but in their own way.
  abstract function display();

  // All ducks swim.
  public function swim() {
    echo "Just keep swimming\n";
  }
}

/**
 * Quackable interface for all ducks that quack.
 */
interface Quackable {
  // All ducks quack.
  public function quack();
}

/**
 * Flyable interface for all ducks that fly.
 */
interface Flyable {
  // All ducks quack.
  public function fly();
}

// Mallard is a child of Duck.
class Mallard extends Duck implements Quackable, Flyable {
  public function display() {
    echo "Show a Mallard duck\n";
  }
  public function quack() {
    echo "Quack, quack, quack\n";
  }
  public function fly() {
    echo "To infinity and beyond\n";
  }
}

// Redhead is a child of Duck.
class Redhead extends Duck implements Quackable, Flyable {
  public function display() {
    echo "Show a Redhead duck\n";
  }
  public function quack() {
    echo "Quack, quack, quack\n";
  }
  public function fly() {
    echo "To infinity and beyond\n";
  }
}

// Rubber is a child of Duck.
class Rubber extends Duck implements Quackable {
  public function display() {
    echo "Show a Rubber duck\n";
  }
  public function quack() {
    echo "Squeak\n";
  }
}

// Decoy is a child of Duck.
class Decoy extends Duck {
  public function display() {
    echo "Show a Decoy duck\n";
  }
}

// Instantiate an object.
$donald = new Redhead();
$donald->fly();
