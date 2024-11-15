<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reajustador</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
  $precoAjustar = $_GET['preco'] ?? 0;
  $ajuste = $_GET['reajuste'] ?? 0 ;
  ?>
  <header></header>
  <main>
    <h1>Reajustador de preços</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <label for="preco">Preço do Produto</label>
      <input required type="number" name="preco" id="idpreco" step="0.01">
      <label for="altPreco">Qual será o reajuste do preço?</label>
      <input required type="number" name="reajuste" id="reajuste">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <?php 
    $padraoInternacional = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    $precoFinal = $precoAjustar + ($precoAjustar * ($ajuste/100)); 
    $precoFinalFormat = numfmt_format_currency($padraoInternacional, $precoFinal, "BRL");
    $precoDesconto = $precoAjustar - ($precoAjustar * ($ajuste/100)); 
    $precoDescontoFormat = numfmt_format_currency($padraoInternacional, $precoDesconto, "BRL");
    print ("<p>O preco <strong>R$ </strong>, ajustado em $ajuste%, ficará $precoFinalFormat</p>");
    print ("<p>O preco <strong>R$ </strong>, descontado em $ajuste%, ficará $precoDescontoFormat</p>");
    ?>
  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>