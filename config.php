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
    private $host;
    private $username;
    private $pwd;
    private $db;

    public $conn;

    public function __construct(){

        $this->host = $host;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->db = $db;
        


        $conn = mysqli_connect($host, $username, $pwd, $db);
        if (!$conn){
            die ('Error de connection');
        }
        echo 'database connected successfuly';
        return $this->conn = $conn;
    }
}
?>