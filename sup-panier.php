<?php

include 'config.php';
$id = $_GET['id'];


$sqlDelete = "DELETE  from plante_panier  where id = $id";
$reqDelete = mysqli_query($conn, $sqlDelete);

header('Location: page-panier.php');


?>