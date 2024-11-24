<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 6</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
  $dividendo =$_GET['dividendo'] ?? 0;
  $divisor =$_GET['divisor'] ?? 1;
  $resto = $dividendo%$divisor;
  $resultado = intdiv($dividendo,$divisor);
  ?>
  <header></header>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id="idDividendo">
      <label for="dividendo">Divisor</label>
      <input type="number" name="divisor" id="idDivisor">
      <input type="submit" value="Analisar">
    </form>
  </main>
  <section>
    <h1>Estrutura da divisão</h1>
    <table class="divisao">
      <tr>
        <td>
          <?php print("$dividendo")?>
        </td>
        <td>
          <?php print("$divisor")?>
        </td>
      </tr>
      <tr>
        <td>
          <?php print("$resto")?>
        </td>
        <td class="resultado-verde">
          <?php print("$resultado")?>
        </td>
      </tr>
    </table>
  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>

</body>

</html>