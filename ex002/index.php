<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex002</title>
</head>

<body>
  <h1>Exemplo de PHP</h1>
  <?php 
    date_default_timezone_set("America/Sao_Paulo");
    print "Hoje é dia " . date("d/M/Y") . "<br/>";
    print "A hora atual é " . date("G:i:s");
    //print "A hora atual é " . date("G:i:s T"); T is for the server time zone, in this case, we made it so that our server was America/Sao_Paulo
    //if D, will show the name of the day, not the number 
  ?>
</body>

</html>