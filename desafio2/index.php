<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<header>

</header>
<main>
  <h1>Trabalhando com números aleatórios</h1>
  <?php 
  $randNumber = rand(0,100);
  
  print("Gerando um número aleatório entre 0 e 100...");
  print("</br>");
  print("O valor gerado foi: <strong>$randNumber</strong>");
  ?>
  <button onclick="window.location.href='index.php'">Gerar outro</button>


</main>
<footer>
  <h1>Created with PHP, CSS, HTML and Javascript</h1>
</footer>

<body>

</body>

</html>