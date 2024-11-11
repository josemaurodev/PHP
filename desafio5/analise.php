<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header>
  </header>
  <main>
    <h1>Analisador de Número Real:</h1>
    <?php 
    $numeroReal = $_GET["numeroReal"];
    $parteInteira = intdiv($numeroReal, 1);
    $parteFrac = $numeroReal-$parteInteira;

    $parteFracFormat = number_format($parteFrac, 3, '.', ',');
    print("Analisando o número $numeroReal informado pelo usuário:");
    print ("</br>");
    print ("A parte inteira do número é $parteInteira");
    print ("</br>");
    print ("A parte fracionária do número é $parteFracFormat"); 
    ?>
    <button onclick="window.location.href='index.html'">Voltar</button>
  </main>
  <footer>
    <h1>Created with PHP, CSS, HTML and Javascript</h1>
  </footer>
</body>

</html>