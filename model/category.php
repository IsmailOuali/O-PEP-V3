<?php

include '../config.php';


class categorie{

    private $id_cat;
    private $nom_cat;

    public function __construct($id_cat, $nom_cat){

        $this->id_cat = $id_cat;
        $this->nom_cat = $nom_cat;
    }

    public function __get($pro){
        return $this->$pro;
    }

    public function __set($pro, $val){
        $this->$pro = $value;
    }
    
    public function addcategorie(){
        $req = DBconnection::connection()->prepare("INSERT INTO categorie VALUES(:id_cat, :nom_cat)");
        $req->bindParam(':id_cat', $this->id_cat);
        $req->bindParam(':nom_cat', $this->nom_cat);
        $req->execute();
    }
}

?>