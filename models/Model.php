<?php

class Model
{
    private string $host = "localhost";
    private string $db_name = "library";
    private string $username = "root";
    private string $password = "JanganLupa321!";

    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            die("Connection fail: " . $e->getMessage());
        }
    }
}
