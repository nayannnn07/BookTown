<?php
    include '../config/dbconnect.php';

    $sql="Create table cart(
        id int PRIMARY KEY AUTO_INCREMENT,
        title varchar(100),
        author varchar(100),
        price decimal(10,2),
        image_name varchar(255),
        quantity int
        )";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        die ("Table is not created due to ".mysqli_error($conn));
    }
?>