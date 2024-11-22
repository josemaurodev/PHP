<?php 
require '../config/config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $email){
  //create a variable sql to go to the database and select every single email from the database that is equal to the variable $email (:email in the query)
  $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
  //bind the writen email by the user to the variable email
  $sql->bindValue(':email', $email);
  //execute email
  $sql->execute();


  //if the row count is exactly 0, them the sql query did not find any email that is equal to the new one
  if($sql->rowCount() === 0){
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    
    $sql->execute();
    
    session_start();
    $_SESSION['success'] = 'Usuário cadastrado com sucesso';
    header("Location: ../index.php");
    //if the email is already register return to the cadastrar.php
  }else{
    session_start();
    $_SESSION['error'] = 'E-mail já cadastrado!';
    header("Location: ../create.php");
    exit;
}

}
else{
  header("Location: ../create.php");
  exit;
}

?>