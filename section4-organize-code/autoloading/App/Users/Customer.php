<?php

namespace App\Users;

use App\Logging\LoggableTrait;
use App\Logging\Logger;

class Customer extends User
{
  use LoggableTrait;

  public function setLogger(Logger $logger)
  {
    echo "<H2>called from Costumer class.</H2> " . PHP_EOL;
    
    $this->logger = $logger;
  }
}