<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
      session_start();
      require 'config/config.php';

      $lista = [];
      $sql = $pdo->query("SELECT * FROM usuario");
      if($sql->rowCount() >0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
      }
    ?>

  <main>
    <?php 
    // show success message, if the user is register successfully
      if (isset($_SESSION['success'])) {
      echo '<p style="color: green;">' . $_SESSION['success'] . '</p>';
      unset($_SESSION['success']); // Limpar a mensagem após exibir
      }

      // show any error message
      if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      unset($_SESSION['error']); // Limpar a mensagem após exibir
      }
      ?>
    <h1>All users</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Acoes</th>
      </tr>
      <?php 
        foreach ($lista as $usuario):
        ?>
      <tr>
        <td><?php print($usuario['id']);?></td>
        <td><?php print($usuario['nome']);?></td>
        <td><?php print($usuario['email']);?></td>
        <td>
          <a href="edit.php?id=<?=$usuario['id'];?>" title="Edit"><i class="fas fa-edit"></i></a>
          <a href="controller/deleteAction.php?id=<?=$usuario['id'];?>" title="Delete"><i
              class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <a href="create.php">Create a new user</a>
  </main>
  <footer>
    <p>Created with HTML, CSS, Javascript and PHP</p>
  </footer>
</body>

</html>