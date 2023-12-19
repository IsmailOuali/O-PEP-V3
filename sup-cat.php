<?php
include 'config.php';
$id = $_GET['id'];

$sqldlt = "DELETE from categorie where id = $id";
$resultdlt = mysqli_query($conn, $sqldlt);

header('Location: categorie-admin.php');



?>