<!-- logic to get user from the database  -->

<?php 
    require 'config/config.php';

    $usuario = [];//$id = $_GET('id'); or
    $id = filter_input(INPUT_GET, 'id');
    if($id){
      $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
      $sql->bindValue(':id' , $id);
      $sql->execute();
    
      if($sql->rowCount()>0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
      }
      else{
        header("Location: index.php");
        exit;
      }
    }
    else{
      header("Location: index.php");
    }
?>

<!-- start of the html to show user -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuário</title>
</head>

<body>
  <header></header>
  <main>
    <h2>Editar Usuário</h2>
    <h2>Editando usuário <?php print($usuario['id']); ?>, de nome <?php print($usuario['nome']); ?>, com email
      <?php print($usuario['email']); ?></h2>

    <form action="controller/editAction.php" method="post">
      <!-- Campo hidden para enviar o ID -->
      <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

      <label for="nome">Nome</label>
      <input required type="text" name="nome" id="idnome" value="<?php echo htmlspecialchars($usuario['nome']); ?>">

      <label for="email">E-mail</label>
      <input required type="email" name="email" id="idemail" value="<?php echo htmlspecialchars($usuario['email']); ?>">

      <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
      ?>

      <input type="submit" value="Salvar">
    </form>
    <p><a href="index.php">Ver todos os usuários</a></p>
  </main>
  <footer>
    <p>Created with HTML, CSS, Javascript, and PHP</p>
  </footer>
</body>

</html>