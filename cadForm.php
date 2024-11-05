<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadForm</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Resultado do envio
    </h1>
  </header>
  <main>
    <?php 
    $name = $_GET["nome"] ?? "sem nome";
    $surname = $_GET["sobrenome"] ?? "conhecido";
    print ("É um prazer te conhecer, $name $surname! Este é um projeto de site desenvolvido em PHP, CSS e HTML.");
  ?>
    <p><a href="javascript:history.go(-1)">Voltar Javascript</a></p>
    <p><a href="index.html">Voltar href</a></p>
  </main>
  <footer>
    <h1>Created with PHP/HTML/CSS/Javascript</h1>
  </footer>
</body>

</html>