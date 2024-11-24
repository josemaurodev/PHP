<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio PHP</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
    //Caputrando os dados do Formulário 
    $valor1 = $_GET['v1']??0;
    $valor2 = $_GET['v2']??0;
    $soma = $valor1 + $valor2;
  ?>
  <main>
    <h1>Somador de valores</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
      <label for="v1">Valor 1</label>
      <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
      <label for="v2">Valor 2</label>
      <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
      <input type="submit" value="Somar">
  </main>

  </form>
  <section id="resultado">
    <h2>Resultado da soma: <?=$soma?>
    </h2>
  </section>
</body>

</html>