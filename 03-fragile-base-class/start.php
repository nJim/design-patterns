<?php

/**
 * Duck Class
 *
 * The duck can display, quack, and swim.
 */
abstract class Duck {
  // All ducks display but in their own way.
  abstract function display();

  // All ducks quack.
  public function quack() {
    echo "Quack, quack, quack\n";
  }

  // All ducks swim.
  public function swim() {
    echo "Just keep swimming\n";
  }
}

// Mallard is a child of Duck.
class Mallard extends Duck {
  public function display() {
    echo "Show a Mallard duck\n";
  }
}

// Redhead is a child of Duck.
class Redhead extends Duck {
  public function display() {
    echo "Show a Redhead duck\n";
  }
}

// Instantiate an object.
$donald = new Mallard();
$donald->display();
