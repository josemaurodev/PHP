<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor</title>
  <link rel="stylesheet" href="style.css">
</head>
<header>
</header>
<main>
  <h1>Conversor de moedas v1.0</h1>
  <?php 
  $numberToConvert = $_GET["moeda"];
  $numberDolar = $numberToConvert*5.7;

  $padraoInternacional = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

  print ("<p>Seus " . numfmt_format_currency($padraoInternacional, $numberToConvert, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padraoInternacional, $numberDolar, "USD")."</strong></p>");
  print ("<p><strong>Cotação do dólar é R$5,70</strong> informada diretamente no código</p>");
?>
  <button onclick="window.location.href='index.html'">Voltar</button>

</main>
<footer>
  <h1>Created with PHP, CSS, HTML and Javascript</h1>
</footer>

<body>

</body>

</html>