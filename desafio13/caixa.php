<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa eletrônico</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
  img.nota {
    height: 60px;
    margin: 5px;
  }
  </style>
</head>

<body>
  <?php 
  $valorSaque =$_GET['valor'] ?? 0 ;
  ?>
  <header></header>
  <main>
    <h1>Caixa eletrônico</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="valor">Qual valor você deseja sacar? (R$)
        <sup>*</sup>
      </label>
      <input required type="number" name="valor" id="idvalor" step="5">
      <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
      <input type="submit" value="Sacar">
    </form>
  </main>
  <section>
    <?php 
    
    $padraoInternacional = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $valorSaqueFormat = numfmt_format_currency($padraoInternacional, $valorSaque, "BRL");

    $nota100 = intdiv($valorSaque, 100);
    $resto = $valorSaque%100;

    $nota50 = intdiv($resto, 50);
    $resto = $resto%50;

    $nota10 = intdiv($resto, 10);
    $resto = $resto%10;

    $nota5 = intdiv($resto, 5);
    $resto = $resto%5;

    print ("<h1>Saque de R$ $valorSaqueFormat realizado</h1>");
    print ("<p>O caixa vai te entregar as seguintes notas:</p>");
    ?>

    <ul>
      <li>
        <img src="../images/100-reais.jpg" alt="Nota de 100R$" class="nota">
        <?php print ("x$nota100");?>
      </li>
      <li>
        <img src="../images/50-reais.jpg" alt="Nota de 50R$" class="nota">
        <?php print ("x$nota50");?>
      </li>
      <li>
        <img src="../images/10-reais.jpg" alt="Nota de 10R$" class="nota">
        <?php print ("x$nota10");?>
      </li>
      <li>
        <img src="../images/5-reais.jpg" alt="Nota de 5R$" class="nota">
        <?php print ("x$nota5");?>
      </li>
    </ul>
  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>