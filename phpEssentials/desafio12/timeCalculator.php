<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Tempo</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
  $segundos = $_GET['seg'] ?? 0;
  ?>
  <header></header>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <label for="segundos">Qual o total de segundos?</label>
      <input required type="number" name="seg" id="idseg">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <?php
    $anos = intdiv($segundos, 31536000);
    $resto = $segundos % 31536000;

    $semanas = intdiv($resto, 604800); 
    $resto = $segundos % 604800; 

    $dias = intdiv($resto, 86400); 
    $resto = $resto % 86400; 

    $horas = intdiv($resto, 3600); 
    $resto = $resto % 3600; 

    $minutos = intdiv($resto, 60); 
    $segundosRestantes = $resto % 60; 
?>
    <h1>Totalizando tudo</h1>
    <p>Analisando o valor que você digitou,
      <?php print "<strong>" .number_format($segundos, 0, ',', '.') . "</strong>"?>, equivalem a um total de:</p>
    <ul>
      <li><?php print "$anos" ?> anos</li>
      <li><?php print "$semanas" ?> semanas</li>
      <li><?php print "$dias" ?> dias</li>
      <li><?php print "$horas" ?> horas</li>
      <li><?php print "$minutos" ?> minutos</li>
      <li><?php print "$segundosRestantes" ?> segundos</li>
    </ul>
  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>