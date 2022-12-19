<?php

ob_start();

if (!isset($_SESSION)) {
    session_start();
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpers';

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die('Cannot connect to database {$dbname}');
