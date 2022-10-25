<?php 

namespace App\Conference;

abstract class Registrant 
{
  protected static $meta = 'Conference Registrant';

  public function getMeta()
  {
    // when called from Attendee instance it will return 'Conference Registrant' (this parent class)
    // return self::$meta; 
    
    // in order to return $meta that applies to the child class (Attendee)
    return static::$meta;
  }
}