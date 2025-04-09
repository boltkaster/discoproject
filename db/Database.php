<?php
namespace App\Db;

use PDO;
use PDOException;

class Database {
    protected $conn;

    public function __construct() {
        $host = "localhost";
        $dbname = "formular";
        $port = 3306;
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO(
                "mysql:host=$host;dbname=$dbname;port=$port",
                $username,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            die("Chyba databázy: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
