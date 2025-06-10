<?php
// Database class to manage the connection to the MySQL database
class Database {
    private $pdo;  // private variable that stores database connection
// Constructor initializes the database connection
    public function __construct($host, $db, $user, $pass) {
        try {
            // Create a new PDO connection with the specified host, database, username, and password
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            // Set PDO to throw exceptions for any errors
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // If connection fails, display the error message and stop execution
            die("Connection failed: " . $e->getMessage());
        }
    }
    // Method to return the PDO connection instance
    public function getConnection(): PDO {
        return $this->pdo; // returns connection object
    }
}
