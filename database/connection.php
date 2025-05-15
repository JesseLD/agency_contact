<?php

namespace Database;

class Connection
{
  private static $instance = null;
  private $connection;

  private $database = 'my_database';
  private $username = 'username';
  private $password = 'password';
  private $host = 'localhost';
  private $port = '3306';

  private function __construct()
  {
    $this->connection = new \PDO(
      "mysql:host={$this->host};port={$this->port};dbname={$this->database}",
      $this->username,
      $this->password
    );
    $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  }
  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new Connection();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->connection;
  }
  public function query($sql, $params = [])
  {
    $stmt = $this->connection->prepare($sql);
    $stmt->execute($params);
    return $stmt;
  }


  public function fetchAll($sql, $params = [])
  {
    $stmt = $this->query($sql, $params);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
}
