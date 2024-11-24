<?php
require '../config/config.php';

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

session_start();

if ($id && $nome && $email) {
    // Update the user in the database
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    $_SESSION['success'] = 'Usuário editado com sucesso!';
    header("Location: ../index.php");
    exit;
} else {
    $_SESSION['error'] = 'Preencha todos os campos corretamente.';
    header("Location: ../edit.php?id=$id");
    exit;
}
?>