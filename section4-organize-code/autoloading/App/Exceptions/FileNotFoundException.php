<?php 

namespace App\Exceptions;

use Exception;

class FileNotFound extends \Exception // requires '\' because in global namespace otherwise php will search in 'App'
{
  
}