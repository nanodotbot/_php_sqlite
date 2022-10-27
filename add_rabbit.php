<?php
require('database_connection.php');
$name = $_POST['name'];
$color = $_POST['color'];
$statement = $pdo->prepare('INSERT INTO rabbits (name, color) VALUES (:name, :color)');
$statement->execute([
    ':name' => $name,
    ':color' => $color
]);
header('Location: index.php');
?>