<?php 

namespace App\Utility;

use App\Exceptions\FileNotFoundException;
use App\Exceptions\BadJsonException;

class JsonFileReader 
{
  public function readFileAsAssArray(string $filename): array
  {
    if (!file_exists($filename)) {
      throw new FileNotFoundException("The file " . $filename . "could not be found.");
    }

    // get file content as json string
    $content = file_get_contents($filename);
  
    // true means decode into associative array
    $items = json_decode($content, true);

    // check if json file is without errors
    if (!isset($items)) {
      throw new BadJsonException("The content of " . $filename . " could not be decoded into json ");
    }
  
    return $items;

  }
}