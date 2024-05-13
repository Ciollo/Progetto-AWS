<?php
class DBConnect
{
    private $dsn = "mysql:host=34.228.39.101;dbname=prova;port=3307;charset=utf8";
    private $dbUsername = "root"; // Assuming your MySQL username is 'root'
    private $dbPassword = "ProgettoAwsPhpMyAdmin!"; // Assuming your MySQL password is 'ProgettoAwsPhpMyAdmin!'
    private $conn;

    public function connect()
    {
        try {
            echo 'Attempt Connection.     ';
            $this->conn = new PDO($this->dsn, $this->dbUsername, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
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
