<?php
class Database
{
   // database credentials
    private $host = "localhost";
    private $db_name = "appgestcom";
    private $username = "Franck-Lionel";
    private $password = "Franck-Lionel007";
    public $conn;

    // database connection
    public function getConnection()
    {
      $this->conn = null;

        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
