<?php
class DBConnect
{
    private $dsn = "mysql:host=mysql;dbname=34.228.39.101;port=3307;charset=utf8";
    private $dbUsername = "root";
    private $dbPassword = "ProgettoAwsPhpMyAdmin!";
    private $conn;

    public function connect()
    {
        try {
            echo 'Attempt Connection.     ';
            $this->conn = new PDO($this->dsn, $this->dbUsername, $this->dbPassword);

            echo 'Connected successfully.      ';
        } catch (PDOException $exception) {
            echo 'Connection failed: ' . $exception->getMessage();
        }
        return $this->conn;
    }
}


$co = new DBConnect();
$co->connect();
?>