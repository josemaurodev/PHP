<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processamento do numero</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Resultado final</h1>
  </header>
  <main>
    <?php 
      $num = $_GET["numero"] ?? "sem numero";
      $ant = $num-1;
      $suc = $num+1;
      
      print ("O numero escolhido foi: <strong>$num</strong>" . "<br/>");
      print ("O antecessor é: $ant" . "<br/>");
      print ("O sucessor é: $suc" . "<br/>");
    ?>
    <p><a href="javascript:history.go(-1)">Voltar js</a></p>
    <button onclick="window.location.href='index.html'">Voltar</button>

  </main>
  <footer>
    <h1>Created with PHP, CSS, HTML and Javascript</h1>
  </footer>
</body>

</html>