<?php

namespace App\Account;

class User
{
    private $conn;

    public function __construct(\PDO $pdo)
    {
        $this->conn = $pdo;
    }

    public function createUser()
    {
    }

    public function deleteUser()
    {
    }
    public function getUsers()
    {
        return $this->conn->query("SELECT login, email FROM users")->fetchAll();
    }
}
