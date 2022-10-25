<?php 

namespace App\Logging;

trait LoggableTrait 
{
  protected $logger;

  public function setLogger(Logger $logger)
  {
    echo "Called from loggable train" . PHP_EOL;
    $this->logger = $logger;
  }

  public function getLogger(): Logger
  {
    return $this->logger;
  }
}