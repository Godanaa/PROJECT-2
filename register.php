<?php

include "connect.php";

if(isset($_POST["signup"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    if($conn->query($sql)===TRUE){
        header("index.php");
    }else{
        echo"Error:".$sql."<br>".$conn->error;
    }
}

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
       session_start()
       $row=$result->fetch_assoc();
         $_SESSION["email"]=$row["email"];
         header("location : homepage.php")
         exit
       ;
    }else{
        echo"Username or password is incorrect";
    }
}