<?php
include '../config.php';


class Plante{

    private $nom;
    private $Origine;
    private $Taille;
    private $Température;
    private $Prix;
    private $id_cat;
    private $img;


    public function __construct($nom, $Origine, $Taille, $Température, $Prix, $id_cat, $img){
        $this->nom = $nom;
        $this->Origine = $Origine;
        $this->Taille = $Taille;
        $this->Température = $Température;
        $this->Prix = $Prix;
        $this->id_cat = $id_cat;
        $this->img = $img;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function showplantes(){

        $sql = DBconnection::connection()->prepare("SELECT * FROM plante");
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        $plantes = array();

        foreach($result as $row){
            
            $p = new Plante($row['nom'], $row['Origine'], $row['Taille'], $row['Température'], $row['Prix'], $row['id_cat'], $row['img']);

            array_push($plantes, $p);

        }
       
        return $p;
    }
}
?>

