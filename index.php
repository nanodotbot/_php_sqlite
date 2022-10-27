<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing async</title>
</head>
<body>
    <form action="add_rabbit.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="color" placeholder="color">
        <input type="submit" value="add">
    </form>
    <form action="delete_rabbit.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="submit" value="delete">
    </form>
    <?php require('database_connection.php'); 
        $statement = $pdo->prepare('SELECT * FROM rabbits');
        $statement->execute();
        $rabbits = $statement->fetchAll();
        foreach ($rabbits as $rabbit) {
            echo '<p>' . $rabbit['name'] . ' is ' . $rabbit['color'] . '</p>';
        }
    ?>
</body>
</html>