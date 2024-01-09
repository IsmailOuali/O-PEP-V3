<?php
include '../model/category.php';
include '../config.php';

$r = $_GET['id'];

$obj = new categorie($r,"ftt");
$obj->deletecategory();

header('Location: ../categorie-admin.php');

?>