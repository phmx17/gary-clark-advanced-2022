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

use App\Users\Customer;
use App\Logging\Logger;


  $logger = new Logger;
  $customer = new Customer;
  $customer->setLogger($logger)

  ?>
  <style>
    p {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 80px;
      text-align: center;
      padding: 1rem 1rem;
    }
  </style>
  <p><?php echo $customer->getLogger()->log() ; ?></p>

</body>
</html>