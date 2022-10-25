<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NamespaceX</title>
</head>
<body>
  <style>
    body {
      background-color: #316161;
      color: white;
      font-family: sans-serif;
      text-align: center;
    }
    section {
      padding-top: 20vh;
    }
    li {
      padding: 1rem 1rem
    }
  </style>

  <?php
    require('Database/MySQL/Connection.php');
    require('Database/PostgreSQL/Connection.php');
    use \Database\MySQL\Connection;
    use \Database\PostgreSQL\Connection as PostgresConnection;

    $mySqlConnection = new Connection();
    $myPostgresConnection = new PostgresConnection();
  
  ?>
  <section>
    <h1>Database Connections</h1>
    <ul>
      <li><?php echo $mySqlConnection->getDatabaseUrl(); ?></li>
      <li><?php echo $myPostgresConnection->getConnectionUrl(); ?></li>
    </ul>    
  </section>

</body>
</html>