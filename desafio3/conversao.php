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
  <h1>Conversor de moedas v1.0</h1>
  <?php 
  $numberToConvert = $_GET["moeda"];
  $numberDolar = $numberToConvert*5.7;

  $numberDolarFormat = number_format ($numberDolar, 2, '.',);
  print ("Seus $numberToConvert equivalem a <strong>US$ $numberDolarFormat</strong>");
  print ("</br>");
  print ("<strong>Cotação do dólar é R$5,70</strong> informada diretamente no código");
?>
  <button onclick="window.location.href='index.html'">Voltar</button>

</main>
<footer>
  <h1>Created with PHP, CSS, HTML and Javascript</h1>
</footer>

<body>

</body>

</html>