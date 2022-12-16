<?php

const DB_HOST = 'localhost';
const DB_NAME = 'phpers';
const DB_USER = 'root';
const DB_PASSWORD = '';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

if ($mysqli->connect_errno)
{
    die('Connection error: ' . $mysqli->connect_error);
}

return $mysqli;