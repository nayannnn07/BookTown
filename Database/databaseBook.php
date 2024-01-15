<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($hostname, $username, $password);
    if(!$conn){
        die("Connection was not successful due to ".mysqli_connect_error());
    }
    
    $sql="CREATE DATABASE book";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die ("Database is not created due to ".mysqli_error($conn));
    }
?>