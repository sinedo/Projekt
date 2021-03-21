<?php

class Database{

  private $conn;
  private $host;
  private $user;
  private $pass;
  private $name;
  private $charset;

  protected function connect(){
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->name = "myhealthdb";
    $this->charset="utf8mb4";

    $dsn = "mysql:host=" .$this->host.";dbname=".$this->name.";charset=".$this->charset;
    $this->conn = new PDO($dsn, $this->user, $this->pass);
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $this->conn;
    
  }

  protected function close($pdo){
    $pdo = null;
  }

}