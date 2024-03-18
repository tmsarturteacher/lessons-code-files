<?php

class Connection {
    public PDO $db;

    public function getConnection()
    {
        $dsn = "mysql:host=127.0.0.1;port=33306;dbname=lessonDsn;charset=utf8"; // default port 3306

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->db = new PDO($dsn, 'root', '', $options);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

