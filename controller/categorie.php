<?php 

include "../model/category.php";

if (!$_POST){
    die("ERROR POST");
}
$name = $_POST['Categoryname'];
$c = new categorie(NULL, $name);

$c->addcategorie();




?>