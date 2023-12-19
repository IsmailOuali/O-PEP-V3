<?php

include 'config.php';


class basic_operation
{

    public function Insert_Data()
    {
        if (isset($_POST['submitInsc'])) {
            $nom = $_POST["nomInsc"];
            $prenom = $_POST["prenomInsc"];
            $email = $_POST["emailInsc"];
            $mdp = $_POST["mdpInsc"];
            $smt = new DBConnection();
            $qry = $smt->prepare("insert into utilisateurs( emailUtl,mdpUtl,nomUtl,prenomUtl) VALUES ('" . $nom . "','" . $prenom . "','" . $email . "','" . $mdp . "')");
            $qry->execute();
            if($qry->execute()){
                $lastUserId = $conn->insert_id;
                header("Location: role.php?id=$lastUserId");
            }
        else{
            echo "<script>alert('Remplir tous les champs')</script>";
        }

        }
    }
}



?>