<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raizes de um número</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php 
    $numero = $_GET['numero'] ?? 0 ;
  ?>

  <header></header>
  <main>
    <h1>Informe um número</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="numero">Número</label>
      <input required type="number" name="numero" id="idnumero">
      <input type="submit" value="Calcular raízes">
    </form>
  </main>

  <section>
    <h2>Resultado final:</h2>
    <?php 
    $raizQuadrada = sqrt($numero);
    $raizCubica = pow($numero, (1/3));

    $raizQuadrada = number_format($raizQuadrada, 3, ',', '.');
    $raizCubica = number_format($raizCubica, 3, ',', '.');
    
    print("<p>Analisando o <strong>número $numero</strong>, temos:</p>");
    print("<li>Raiz quadrada: <strong>$raizQuadrada</strong></li>");
    print("<li>Raiz cubica: <strong>$raizCubica</strong></li>");
    ?>
  </section>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>