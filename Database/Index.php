<?php

namespace Database;

class Index
{
    public \Database\Connection $pdo;

    public function __construct()
    {
        $this->pdo = new Connection();
        $this->pdo->getConnection();
    }

    public function insertDataToDB(string $sql): bool|int
    {
        return $this->pdo->db->query($sql);
    }

    public function getData(string $sql): bool|\PDOStatement
    {
        return $this->pdo->db->query($sql);
    }
}