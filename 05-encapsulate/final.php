<?php

/**
 * Duck Class
 *
 * The duck can display, quack, and swim.
 */
abstract class Duck {

  protected $flyBehavior;
  protected $quackBehavior;

  // All ducks display but in their own way.
  abstract function display();

  // All ducks swim.
  public function swim() {
    echo "Just keep swimming\n";
  }

  // Change fly behavior at runtime.
  public function setFlyBehavior(FlyBehavior $fb) {
    $this->flyBehavior = $fb;
  }

  // Change quack behavior at runtime.
  public function setQuackBehavior(QuackBehavior $qb) {
    $this->quackBehavior = $qb;
  }

  // All ducks perform one of the fly behaviors.
  public function performFly() {
    $this->flyBehavior->fly();
  }

  // All ducks perform one of the quack behaviors.
  public function performQuack() {
    $this->quackBehavior->quack();
  }
}

/**
 * QuackBehavior.
 */
interface QuackBehavior {
  // All ducks quack.
  public function quack();
}

class Quack implements QuackBehavior {
  public function quack() {
    echo "Quack, quack, quack\n";
  }
}

class Squeak implements QuackBehavior {
  public function quack() {
    echo "Squeak\n";
  }
}

class Mute implements QuackBehavior {
  public function quack() {
    // Silence is golden.
  }
}

/**
 * FlyBehavior.
 */
interface FlyBehavior {
  // All ducks quack.
  public function fly();
}

class FlyWithWings implements FlyBehavior {
  public function fly() {
    echo "To infinity and beyond\n";
  }
}

class NoFly implements FlyBehavior {
  public function fly() {
    // Do nothing; can't fly.
  }
}

// Mallard is a child of Duck.
class Mallard extends Duck {
  public function __construct() {
    $this->quackBehavior = new Quack();
    $this->flyBehavior = new FlyWithWings();
  }
  public function display() {
    echo "Show a Mallard duck\n";
  }
}

// Redhead is a child of Duck.
class Redhead extends Duck {
  public function __construct() {
    $this->quackBehavior = new Quack();
    $this->flyBehavior = new FlyWithWings();
  }
  public function display() {
    echo "Show a Redhead duck\n";
  }
}

// Rubber is a child of Duck.
class Rubber extends Duck {
  public function __construct() {
    $this->quackBehavior = new Squeak();
    $this->flyBehavior = new NoFly();
  }
  public function display() {
    echo "Show a Rubber duck\n";
  }
}

// Decoy is a child of Duck.
class Decoy extends Duck {
  public function __construct() {
    $this->quackBehavior = new Mute();
    $this->flyBehavior = new NoFly();
  }
  public function display() {
    echo "Show a Decoy duck\n";
  }
}

// Instantiate an object.
$donald = new Mallard();
$donald->performFly();
