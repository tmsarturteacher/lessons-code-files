<?php

namespace database;

class Profile
{
    public $pdo;
    public function __construct()
    {
        $this->pdo = new Connection();
        $this->pdo->getConnection();
    }

    public function getUserProfile(int $id)
    {
        $sql = "SELECT * FROM users WHERE id = {$id}";
        return $this->pdo->db->query($sql);
    }
}

$profile = new Profile();
$user = $profile->getUserProfile($_GET['id']);

while ($row = $user->fetch()) {
    die(print_r($row));
}

