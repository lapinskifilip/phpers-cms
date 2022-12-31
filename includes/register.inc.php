<?php

if (isset($_POST['submit'])) {

    $uid  = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    include '../classes/signupController.classes.php';
    include '../classes/signup.classes.php';

    var_dump($uid);
}
