<?php

include '../model/user.php';


session_start();

if(!$_POST){
    header('Location: ../index.php');
}

if(@$_POST['RegisterBtn']){
    $Fname = $_POST['Fname'];
    $Usrname = $_POST['Usrname'];
    $Email = $_POST['Email'];
    $Pwd = $_POST['Pwd'];
    $role = $_POST['role'];
}

$obj = new User();

if ($obj->checkmail($Email)){
    $obj->signup($Fname, $Usrname, $Email, $Pwd, $role);

    header('Location: ../login.php');
}

?>