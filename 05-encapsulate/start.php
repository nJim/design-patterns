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

  // All ducks fly.
  public function fly() {
    echo "To infinity and beyond\n";
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

// Canvasback is a child of Duck.
class Canvasback extends Duck {
  public function display() {
    echo "Show a Canvasback duck\n";
  }
}

// Rubber is a child of Duck.
class Rubber extends Duck {
  public function display() {
    echo "Show a Rubber duck\n";
  }

  // Override as a rubber duck makes a different sound.
  public function quack() {
    echo "Squeak\n";
  }

  // Override as rubber ducks can not fly.
  public function fly() {
  }
}

// Instantiate an object.
$donald = new Rubber();
$donald->fly();
