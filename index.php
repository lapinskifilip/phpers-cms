<!DOCTYPE html>
<?php include 'config/config.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo SITE_TITLE; ?></title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="assets/img/logo-elephant.png" alt="php elephant">
            <p><?php echo SITE_NAME; ?></p>
        </div>
        <ul>
            <li><a href="#">nav</a></li>
            <li><a href="#">nav</a></li>
            <li><a href="#">nav</a></li>
            <li><a href="#">nav</a></li>
        </ul>
    </nav>
    <div class="wrapper">
    <section>
        <h1>Hello on <?php echo SITE_NAME; ?></h1>
    </section>
    <aside>
        <p>side</p>
    </aside>
    </div>
    <footer>
        <p>footer</p>
    </footer>
</body>
</html>