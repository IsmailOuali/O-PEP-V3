<?php

// include '../config.php';


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

    public static function showcategory(){
        $req = DBconnection::connection()->query("SELECT * FROM categorie");
        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);

        $ar = array();
        foreach($result as $row){
            $c = new categorie($row['id'], $row['nom']);
            array_push($ar, $c);


        }
        return $ar;

    }

    public function deletecategory(){
        
        $req = DBconnection::connection()->prepare("DELETE FROM categorie WHERE id = :id_cat");
        $req->bindParam(':id_cat', $this->id_cat);
        $req->execute();

    }

}
?>