<?php
    include '../config/dbconnect.php';
    $id= $_GET['id'];
    $sql= "DELETE FROM admin where id=$id";
    $result= mysqli_query($conn, $sql);
    if($result){
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully!</div>";
        header('location:adminManage.php');
    }
    else{
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin! Please try again later.</div>";
        header('location:adminManage.php');
        // die ("Data is not deleted due to ".mysqli_error($conn));
    }

?>