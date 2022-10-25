<?php 

namespace App\Conference;

use App\Conference\Registrant;

class Attendee extends Registrant
{
  public static $meta = 'Conference Attendee';
  public static int $count = 0;
  private string $username;
  private string $id;
  private static int $nextId = 1; // incremental id for each new attendee, must declare initial value!

  public function __construct()
  {
    self::$count++;

    // dynamically add id to newly created instance
    $this->id = self::$nextId;
    self::$nextId++;
  }

  public static function getCount()
  {
    return self::$count;
  }

  public static function create(array $attributes): Attendee
  {
    $attendee = new self;
    $attendee->username = $attributes['username'];
    return $attendee;
  }
}



