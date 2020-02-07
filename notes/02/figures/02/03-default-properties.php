<?php

class DatabaseConnection
{
  // properties with sensible defaults
  private $engine = "mysql";
  private $host = "127.0.0.1";
  private $port = 3306;

  // properties that don't have sensible defaults
  private $username;
  private $password;

  // ... code to do database stuff
}
