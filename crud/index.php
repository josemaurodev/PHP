<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<!-- 
<body>
  <?php 
  
  //structure to acess the data base
  //$pdo = new PDO("mysql:dbname=test;host=localhost:3306", "root", "");

  //call data base with query
  //$sql = $pdo->query('SELECT * FROM usuario');

  //save all the returned data into variable
  //print ('<pre>');
  //$dados = $sql->fetchAll(pdo::FETCH_ASSOC);
  //printing all data fetched
  //print_r($dados);

  
  //printing the first user
  //$dados is basically a struct (user with name and email)
  //to acess the data: $dados[array position][variable of struct(it can be the name or the number)(but when the ::FETCH_ASSOC is used, it only works when the name of the variable is used)]
  //print("<p>O primeiro usuario é: ".$dados[0]['nome']."<p>");
  //print("<p>O e-mail do  primeiro usuario é: ".$dados[0]['email']."<p>");
  ?>
</body> -->

<body>
  <?php 
require 'config/config.php'
?>

  <main>
    <h1>All users</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Acoes</th>
      </tr>
    </table>
    <a href="create.php">Create</a>
  </main>
  <footer>
    <p>Created with HTML, CSS, Javascript and PHP</p>
  </footer>
</body>

</html>