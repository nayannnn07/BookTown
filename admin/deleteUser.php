<?php
    include '../config/dbconnect.php';
    $id= $_GET['id'];
    $sql= "DELETE FROM customer where id=$id";
    $result= mysqli_query($conn, $sql);
    if($result){
        $_SESSION['delete'] = "<div class='success'>User Deleted Successfully!</div>";
        header('location:adminUser.php');
    }
    else{
        $_SESSION['delete'] = "<div class='error'>Failed to Delete User! Please try again later.</div>";
        header('location:adminUser.php');
        
    }

?>