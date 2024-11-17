<?php
namespace App\Models;

class Database
{
    private static $instance = null;
    private $pdo;
    private $host = 'localhost';
    private $dbname = 'booking_system';
    private $username = 'root';
    private $password = '';

    // Private constructor to prevent multiple instances
    private function __construct()
    {
        try {
            $this->pdo = new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Static method to get the single instance of the class
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Method to get the PDO connection
    public function getConnection()
    {
        return $this->pdo;
    }
}
