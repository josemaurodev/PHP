<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primitive Types</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1>Teste de tipos primitivos</h1>
  <?php
    $int = 300;
    $hex = 0x1A;
    $bin = 0b1011;
    $oct = 010;
    $string = "José";
    $bool = true;
    $float = 3.14;
    
    print "Inteiro: $int" ."<br/>";
    print "Hexadec: $hex" . "<br/>";
    print "Binario: $bin" . "<br/>";
    print "Octal: $oct" . "<br/>";

    $variavelInt = 300;
    var_dump($variavelInt);print "<br/>";
    var_dump($string);print "<br/>";
    var_dump($bool);print "<br/>";
    var_dump($float);print "<br/>";

    $pot = 3e2; //3x(10^2)
    print "$pot" . '<br/>';
    var_dump($pot);print "<br/>";
    $potInt = (int) 3e2;
    print "$potInt" . '<br/>';
    var_dump($potInt);print "<br/>";

    $boolTrue = true;
    $boolFalse = false;

    if ($boolFalse == false){
      print ("O valor da variavel é: $boolFalse (Vazio, não é 0)");
      print ("<br/>");
    }

    if ($boolTrue = true ){
      print ("O valor da variavel é: $boolTrue");
      print ("<br/>");
    }

    $vetor = [1, 2, 3, 4, "José"];
    print ("O vetor tem os valores: $vetor[0] <br/>");
    print ("O vetor tem os valores: $vetor[1] <br/>");
    print ("O vetor tem os valores: $vetor[2] <br/>");
    print ("O vetor tem os valores: $vetor[3] <br/>");
    print ("O vetor tem os valores: $vetor[4] <br/>");
    var_dump($vetor);
    
    class Pessoa{
      private string $nome;

      public function setNome(string $nome): void{
        $this->nome=$nome;
      }
      
      public function getNome(): string{
        return $this->nome;
      }
      
    }

    $pessoa1 = new Pessoa();
    $pessoa1->setNome("José Mauro");
    
    print "<br/>";
    print($pessoa1->getNome());

    ?>

</body>

</html>