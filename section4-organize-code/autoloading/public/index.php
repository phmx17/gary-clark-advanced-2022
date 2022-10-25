<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoload</title>
</head>
<body>
<style>
  p {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    padding: 1rem 1rem;
  }
</style>

  <?php
  // import and run autoload
  include 'autoload.php';

  use App\Conference\Attendee;
  use App\Conference\Host;

  $beth = Attendee::create(['username' => 'Beth_Harmon']);
  $host = new Host; 

  ?>

  <h1>Beth in Paris</h1>

  <p><?= $beth->getMeta(); ?></p>
  <p><?= $host->getMeta(); ?></p>

</body>
</html>