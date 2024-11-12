<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
  $valor1 = $_GET['val1'] ?? 0;
  $valor2 = $_GET['val2'] ?? 0;
  $peso1 = $_GET['pes1'] ?? 1; 
  $peso2 = $_GET['pes2'] ?? 1;
  ?>
  <header></header>
  <main>
    <h1>Médias Aritméticas</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <label for="val1">1o Valor:</label>
      <input type="number" name="val1" id="idval1" step="0.01">
      <label for="pes1">1o Peso:</label>
      <input type="number" name="pes1" id="idpes1" step="0.01">
      <label for="val2">2o Valor:</label>
      <input type="number" name="val2" id="idval2" step="0.01">
      <label for="pes2">2o Peso:</label>
      <input type="number" name="pes2" id="idpes2" step="0.01">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h1>Cálculo das Médias</h1>
    <?php 
    $mediaSimples = ($valor1 + $valor2) /2;
    $mediaPonderada = (($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);
    print ("<p>Analisando os valores de <strong>$valor1</strong> e <strong>$valor2</strong></p>");
    ?>

    <table>
      <tr>
        <td>
          <strong>Média Artimética Simples:
            <?php print($mediaSimples)?>
          </strong>
        </td>
      </tr>
      <tr>
        <td>
          <strong>Média Artimética Ponderada:
            <?php
            $mediaPonderada = number_format($mediaPonderada, 2, '.', ',');
            print($mediaPonderada)?>
          </strong>
        </td>
      </tr>
    </table>

  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>