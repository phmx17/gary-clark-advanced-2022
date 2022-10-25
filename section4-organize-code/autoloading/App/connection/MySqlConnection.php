<?php

namespace App\Connection;
use Database\MySQL\Connection;

class MySqlConnection
{
  // public string $databaseUrl; // no more of this!

  public function __construct(public string $databaseUrl = 'mySQL-db-url') // php 8 magic, like this!
  {
    // $this->databaseUrl = $databaseUrl;  // no more of this!
  }

  public function getDatabaseUrl(): string
  {
    $connection = new Connection();
    $databaseUrl = $connection->getDatabaseUrl();
    return $databaseUrl;
  }

}


