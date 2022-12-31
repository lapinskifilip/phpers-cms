<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Register</title>
</head>
<body>
<div class="login-form">
<form action="includes/register.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Password Repeat">
    <input type="text" name="email" placeholder="E-mail adress">
    <br>
    <button type="submit" name="Submit">Register</button>
</form>
</div>
</body>
</html>