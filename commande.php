<?php

include 'config.php';


$id = $_GET['id'];
session_start();

if (!$_GET['id']){
    header('Location: client.php');
}

$sql = "UPDATE plante_panier SET status = 1 where id = '$id'";
$req = mysqli_query($conn, $sql);




?>

<h1>
    Votre commande est approuver
</h1>