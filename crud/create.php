<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <header></header>
  <main>

    <h2>Cadastro</h2>
    <form action="controller/createAction.php" method="post">
      <label for="nome">Nome</label>
      <input required type="text" name="nome" id="idnome">
      <label for="email">E-mail</label>
      <input required type="email" name="email" id="idemail">

      <?php
session_start();
if (isset($_SESSION['error'])) {
    echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']); // Remove a mensagem após exibi-la
}
?>

      <input type="submit" value="Create">
    </form>
    <p><a href="index.php">See all users</a></p>
  </main>
  <footer>
    <p>Created with HTML, CSS, Javascript and PHP</p>
  </footer>
</body>

</html>