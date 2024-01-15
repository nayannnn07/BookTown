<?php
    include '../config/dbconnect.php';
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {
            $path = "../Images/product/".$image_name;
            $remove = unlink($path);

            if($remove == FALSE){
                $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image.</div>";
                header('location: adminBook.php');
                die();
            }
        }
        $sql= "DELETE FROM product where id=$id";
        $result= mysqli_query($conn, $sql);
        if($result){
            $_SESSION['delete'] = "<div class='success'>Book Deleted Successfully!</div>";
            header('location:adminBook.php');
        }
        else{
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Book! Please try again later.</div>";
            header('location:adminBook.php');
        }
    }

    else
    {
        header('location: adminBook.php');
    }
?>