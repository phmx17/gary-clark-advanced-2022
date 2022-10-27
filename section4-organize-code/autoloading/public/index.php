<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exceptions</title>
</head>
<body>
  <?php 
    include('autoload.php');
    use App\Utility\JsonFileReader;

    $fileReader = new JsonFileReader();
    $filename = '../xfiles/inventory.json';

    // try catch block similar to js
    try {

      $inventory = $fileReader->readFileAsAssArray($filename);
      print_r($inventory);

    } catch(FileNotFoundException $exception) {

      print_r("The file " . $filename . " could not be found.");
    
    } catch(BadJsonException $exception) {

      print_r("The file " . $filename . " is not properly formatted json");
    }

  ?>

</body>
</html>