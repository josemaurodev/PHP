<?php

$db_name = 'test';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = '';

//structure to acess the data base
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
?>