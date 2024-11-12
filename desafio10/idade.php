<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcule a sua idade</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php
  $anoNasc = $_GET['ano'] ?? 0;
  $anoFut = $_GET['anoSaber'] ?? 0;
  ?>
  <header></header>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
      <label for="ano">Em que ano você nasceu?</label>
      <input required type="number" name="ano" id="idano">
      <label for="anoSaber">Quantos anos eu terei no ano:</label>
      <input required type="number" name="anoSaber" id="idAnoSaber">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h1>Resultado</h1>
    <?php 
    $idade = $anoFut - $anoNasc;
    if($anoFut <= $anoNasc){
      print ("O ano que você digitou é menor que sua data de nascimento, tente novamente");
    }
    else{
      print ("Quem nasceu em $anoNasc vai fazer <strong>$idade anos</strong> em $anoFut");
    }
    ?>
  </section>

  <footer></footer>
</body>

</html>