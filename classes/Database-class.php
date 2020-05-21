<?php

class Database {
    
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "notes";
  
    public function conn() {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->user, $this->password);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      return $pdo;
    }
  }
