<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dividir salario</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
  $salario = $_GET['sal'] ?? 0;
  $salarioInt = intdiv($salario, 1412);
  $salarioRest = $salario%1412;
  ?>
  <header></header>
  <main>
    <h1>Informe o seu salário</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="salario">Salário (R$)</label>
      <input required type="number" name="sal" id="idsal" step="0.01">
      <p>Considere o salário mínimo <strong>$1412,00</strong> </p>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php 
    if($salarioRest != 0)
      print("Quem recebe um salário de R$ $salario ganha <strong> $salarioInt salários mínimos </strong>+ R$ $salarioRest");
    else{
      print("Quem recebe um salário de R$ $salario ganha <strong> $salarioInt salários mínimos </strong>");
    }
      
    ?>

  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>