<?php
    include '../config/dbconnect.php';

    $sql="Create table orderdetail(
        id int PRIMARY KEY AUTO_INCREMENT,
        fullname varchar(100),
        contact varchar(12),
        email varchar(255),
        address varchar(255)
        )";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        die ("Table is not created due to ".mysqli_error($conn));
    }
?>