<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <pre>
      <?php 
        setcookie("dia-da-semana", "SEGUNDA", time()+3600);
        session_start();
        $_SESSION["teste"] = "DEU CERTO";
      
        echo "<h1>Super Global GET</h1>";
        var_dump($_GET);
        
        echo "<h1>Super Global POST</h1>";
        var_dump($_POST);

        print "<h1>Super Global REQUEST</h1>";
        var_dump($_REQUEST);
        
        print "<h1>Super Global COOKIE</h1>";
        var_dump($_COOKIE);

        print "<h1>Super Global SESSION</h1>";
        var_dump($_SESSION);

        print "<h1>Super Global ENV</h1>";
        var_dump($_ENV);

        print "<h1>Super Global SERVER</h1>";
        var_dump($_SERVER);

        print "<h1>Super Global GLOBALS</h1>";
        var_dump($GLOBALS);
      ?>
    </pre>
  </main>
</body>

</html>