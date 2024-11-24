<?php
require '../config/config.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Use INPUT_GET, not INPUT_POST

session_start();

if ($id) {
    // Delete the user from the database
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id"); // Corrected SQL syntax
    $sql->bindValue(':id', $id);
    $sql->execute();

    $_SESSION['success'] = 'Usuário excluído com sucesso!';
    header("Location: ../index.php");
}
?>