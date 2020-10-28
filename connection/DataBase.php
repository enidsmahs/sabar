<?php

class DataBase
{
    private $conn;

    public function getConnection() {
        if ($this->conn == null) {
            $pdo = new PDO('mysql:host=localhost;dbname=sabar', 'yagami', 'yaga@admin@root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $pdo;
        }
        return $this->conn;
    }
}