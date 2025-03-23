<?php
session_start();
include("connect.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align: center;padding:15%">
      <p style="font-size: 20px;">Welcome <?php 

        if(isset($_SESSION["email"])){
            $email=$_SESSION["email"];
            $query=mysqli_querry($conn,"SELECT * FROM users WHERE email='$email'");
            while($row=mysqli_fetch_array($query)){
                echo $row["username"];
            }
            echo $_SESSION["email"];
    </div>
    <a href="logout.php">Logout</a> 

    
</body>
</html>