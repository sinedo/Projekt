<?php

namespace DatabaseConnector;

use PDO;

class DatabaseConnector{
  private static ?DatabaseConnector $instance = null;

  private $conn;

  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'myhealthdb';

  private function __construct() {

    $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user, $this->pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  }

  public function getConnection() {
    return $this->conn;
  }

  public static function getInstance() {
    if(!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  private function __clone(){}

  private function __wakeup(){}
}
