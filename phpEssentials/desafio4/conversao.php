<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header></header>
  <main>
    <section>
      <h1>Conversor de Moedas</h1>
      <?php 

      $inicio = date("m-d-Y", strtotime("-7 days"));
      $fim = date("m-d-Y");
      $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
      
      $dados = json_decode(file_get_contents($url), true);
      
      $cotacao = $dados["value"][0]["cotacaoCompra"];
      $dataHoraCotacao = $dados["value"][0]["dataHoraCotacao"];
      $cotacaoData = new DateTime($dataHoraCotacao);
      $dataFormatada = $cotacaoData->format('d/m/y');
      
      $real = $_GET["real"] ?? 0;
      
      $valorEmDol = $real / $cotacao;
      $padraoInternacional = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      
      print ("<p>Seus " . numfmt_format_currency($padraoInternacional, $real, "BRL") . " equivalem a: <strong>" . numfmt_format_currency($padraoInternacional, $valorEmDol, "USD") ."</strong></p>");

      print ("<p>Valor de cotação (<strong>" . numfmt_format_currency($padraoInternacional, $cotacao, "USD") . "</strong>) retirado diretamente do <a href='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarDia' target='_blank'>Banco Central</a>, com data de <strong>$dataFormatada.</strong></p>");
      
      ?>
      <button onclick="window.location.href='index.html'">Voltar</button>
    </section>
  </main>
  <footer>Created with PHP, CSS, HTML and Javascript</footer>
</body>

</html>