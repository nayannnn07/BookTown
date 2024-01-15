<?php
    include '../config/dbconnect.php';
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        if($image_name != "")
        {
            $path = "../Images/category/".$image_name;
            $remove = unlink($path);

            if($remove == FALSE){
                $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image.</div>";
                header('location: adminCategory.php');
                die();
            }
        }
        $sql= "DELETE FROM category where id=$id";
        $result= mysqli_query($conn, $sql);
        if($result){
            $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully!</div>";
            header('location:adminCategory.php');
        }
        else{
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Category! Please try again later.</div>";
            header('location:adminCategory.php');
        }
    }

    else
    {
        header('location: adminCategory.php');
    }
?>