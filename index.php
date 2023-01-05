<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, choose what do you want to do below.</h1>
    <hr>
    <a href="../login.php">Login</a>
    <a href="../register.php">Register</a>

    <h2>Users list</h2>

    <?php

    use App\Account\User;

    include_once "./Config/db.php";

    $user = new User($pdo);
    $list = $user->getUsers();

    foreach ($list as $test) {
        echo $test["login"], "\n";
    }
    ?>
</body>

</html>