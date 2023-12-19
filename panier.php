<?php

include 'config.php';
session_start();
$id = $_GET['id'];
if (!$_GET['id']) {
    header('Location: client.php');

}
$idpanier = $_SESSION['panier'];

$sql2 = "SELECT * from  plante_panier WHERE id_plante = $id AND id_panier = $idpanier AND status = 0";
$req2 = mysqli_query($conn, $sql2);
$fetch = mysqli_fetch_row($req2);





if($fetch != 0){
        $quantite = $fetch['3'];
        $quantite++;
        $sql3 = "UPDATE plante_panier SET qtt = $quantite where id_plante = '$id' and id_panier = $idpanier";        
        $req3 = mysqli_query($conn, $sql3);
}
if ($fetch == 0){
    $sql3 = "INSERT into plante_panier (id,id_plante,id_panier, qtt, status) values (NULL, '$id', '$idpanier', 1, 0)";
    $req3 = mysqli_query($conn, $sql3);

}



header('Location: client.php');
    
?>
