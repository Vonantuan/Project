<?php 
//connection string
$host = "localhost";
$user = "root";
$pass = "";
$database = "projectwork";
$db = mysqli_connect($host,$user,$pass,$database);

if(!$db){
    die("connection failed");
}


?>