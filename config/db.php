<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="shopscence_ai";

$conn =mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn){
    die("database connection failed ".mysqli_connect_error());
}

?>

