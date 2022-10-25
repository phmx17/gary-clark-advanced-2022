<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoload</title>
</head>
<body>
  <?php
  // import and run autoload
  include 'autoload.php';

use App\Conference\Attendee;
$boomer = new Attendee();
$anja = new Attendee();
$sy = new Attendee();

$maverick = Attendee::create(['username' => 'maverick']);
$goose = Attendee::create(['username' => 'goose']);
print_r($maverick);
print_r($goose);

print(Attendee::getCount());



  ?>


</body>
</html>