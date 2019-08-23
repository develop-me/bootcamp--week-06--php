<?php

class DatabaseConnection
{
  // properties with sensible defaults
  private $engine = "mysql";
  private $host = "127.0.0.1";
  private $port = 3306;

  // properties that don't have sensible defaults
  private $db;

  // set the database
  public function setDB($db)
  {
    $this->db = $db;
    return $this;
  }

  // returns the DB connection
  public function connection($username, $password)
  {
    return new PDO(
      $this->pdoSettings(),
      $username,
      $password
    );
  }

  // this method is private - it's only useful inside the class
  private function pdoSettings()
  {
    $parts = implode(";", [
      "host={$this->host}",
      "port={$this->port}",
      "dbname={$this->db}",
    ]);

    return "{$this->engine}:{$parts}";
  }
}
