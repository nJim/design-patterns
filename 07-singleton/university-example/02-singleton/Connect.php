<?php

// @codingStandardsIgnoreStart

/**
 * Connect class.
 *
 * A singleton for connecting to the database.
 */
class Connect {
  private static $instance = null;
  private $conn;

  private $host = 'database';
  private $user = 'lamp';
  private $pass = 'lamp';
  private $name = 'lamp';

  // The db connection is established in the private constructor.
  private function __construct() {
    $this->conn = new PDO(
      "mysql:host={$this->host};dbname={$this->name}",
      $this->user,
      $this->pass
    );
  }

  public static function getInstance() {
    if(!self::$instance) {
      self::$instance = new Connect();
    }
    return self::$instance;
  }

  public function getConnection() {
    return $this->conn;
  }
}

