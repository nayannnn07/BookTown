<?php
    session_start();
    $url = "http://localhost/TheBookTown/";
    $hostname= "localhost";
    $username= "root";
    $password= "";
    $db= "book";
    $conn =mysqli_connect($hostname, $username, $password, $db);

    if(!$conn){
        die("Connection was not successful due to ".mysqli_connect_error());
    }
?>