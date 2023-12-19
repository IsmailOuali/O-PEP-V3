<?php
include 'config.php';
$id = $_GET['id'];
$sqlDelete = "DELETE from plante where id = $id";
$reqDelete = mysqli_query($conn, $sqlDelete);

header('Location: produit-admin.php');


?>