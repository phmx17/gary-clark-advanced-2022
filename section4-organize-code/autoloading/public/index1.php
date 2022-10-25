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

  use App\Connection\MySqlConnection;
  use App\Utility\FakeUtility;

  $mySqlConnection = new MySqlConnection();
  $utility = new FakeUtility();

  ?>
  <style>
    p {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      text-align: center;
      padding: 1rem 1rem;
    }
  </style>
  <p><?php echo $mySqlConnection->getDatabaseUrl(); ?></p>
  <p><?php echo $utility->status;  ?></p>

</body>
</html>