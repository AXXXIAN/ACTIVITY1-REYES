<?php

class Database 
{
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $connection;

    public function __construct()
    {
        if($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_ADDRESS'] === '127.0.0.1' || $_SERVER['SERVER_ADDRESS'] === '192.168.1.72'){
            $this->host = "localhost";
            $this->db_name = "activity1itelec2";
            $this->username = "root";
            $this->password = "";
        }
        else {
            $this->host = "localhost";
            $this->db_name = "";
            $this->username = "";
            $this->password = "";
        }
    }

    public function dbConnection()
    {
        $this->connection = null;
        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connection;
    }

}
?>