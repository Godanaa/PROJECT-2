<?php

$host="localhost";
$user="root";
$password="";
$db="login";
$conn= new mysql($host,$user,$password$db);
if($conn->connect_error){
    echo"failed to connect to database";$conn->connect_error};


?>