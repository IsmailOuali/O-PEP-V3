<?php

$server = 'localhost';
$usr = 'root';
$pwd = 'root';
$db = 'opep3';



$conn = mysqli_connect($server, $usr, $pwd, $db) or die('ERROR IN MY SQLI CONNECT');