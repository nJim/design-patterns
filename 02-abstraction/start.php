<?php

/**
 * Duck Class.
 *
 * A duck can display, quack, and swim.
 */
class Duck {
  public function display() {
    echo "Show a duck\n";
  }

  public function quack() {
    echo "Quack, quack, quack\n";
  }

  public function swim() {
    echo "Just keep swimming\n";
  }
}

// Instantiate an object.
$donald = new Duck();
// Call the swim method.
$donald->display();
