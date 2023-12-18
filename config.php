<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "opep3";

// $conn = new mysqli($servername, $username, $password, $database);

// // Vérifier la connexion
// if ($conn->connect_error) {
//     die("Échec de la connexion à la base de données : " . $conn->connect_error);
// }

class Databaseconnection{
    private $host = 'localhost';
    private $username = 'root';
    private $pwd = 'root';
    private $db = 'opep3';

    public $conn;

    public function __construct(){
        try{

            $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->username, $this->username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
       catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


}
?>