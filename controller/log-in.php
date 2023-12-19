<?php

include '../model/user.php';


if (@$_POST['Loginbtn']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$log = new User();

$res = $log->login($email, $password);


?>