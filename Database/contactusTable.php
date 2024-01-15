<?php
    include '../config/dbconnect.php';

    $sql="Create table feedback(
        name varchar(50),
        contact varchar(50),
        email varchar(50),
        message varchar(200)
        )";
    $result= mysqli_query($conn, $sql);
    if(!$result){
        die ("Table is not created due to ".mysqli_error($conn));
    }
?>