<?php
require 'database_connection.php';
$name = $_POST['name'];
$statement = $pdo->prepare('DELETE FROM rabbits WHERE name = :name');
$statement->execute([
    ':name' => $name
]);
header('Location: index.php');