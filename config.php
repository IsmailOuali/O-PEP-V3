<?php
define("dbhost",'localhost');
define("dbusr",'root');
define("dbpwd",'root');
define("db",'opep-3');


class DBconnection{

    public function __construct(){
          
    }

    
    public static function connection(){

        
        
        try{
            $conn = new PDO("mysql:host=" . dbhost . ";dbname=" . db, dbusr, dbpwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
        catch(PDOException $e){
            echo "DB xonnection failed" . $e->getMessage();
        }
    }
    
}

