<?php

class User{
    
    private $Fullname;
    private $Username;
    private $Email;
    private $Pwd;
    private $role;

    public function __construct(){

    }
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function signup($Fname, $Uname, $Email, $Pwd, $role){
        $sql->DBconnection::connection()->prepare("INSERT INTO users (Fullname, Username, Email, Pwd) VALUES (:Fullname, :Username, :Email, :Pwd)");

        $sql->bindParam(':Fullname', $Fname);
        $sql->bindParam(':Username', $Uname);
        $sql->bindParam(':Email', $Email);
        $sql->bindParam(':Pwd', $Pwd);

        $sql->execute();
    }

    
}


?>