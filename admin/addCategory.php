<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CATEGORY</title>
</head>
<body>
    <?php include 'adminNavbar.php'; ?>
        <div class="userlogin">
            <h2 class="heading">ADD CATEGORY</h2>
        
        <div class="maincontent">
            <div class="wrapper">

            <?php
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']); 
                }
                if(isset($_SESSION['upload'])){
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']); 
                }
            ?>

            <br>

            <form action="" method="POST" enctype="multipart/form-data">

                <table class="tbl-form">
                    <tr>
                        <td>Title</td>
                        <td>
                            <input type="text" name="title" placeholder="Category Title">
                        </td>
                    </tr>
                    <tr>
                        <td>Select Image</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <td>Featured</td>
                        <td>
                            <input type="radio" name="featured" value="Yes">Yes 
                            <input type="radio" name="featured" value="No">No
                        </td>
                    </tr>
                    <tr>
                        <td>Active</td>
                        <td>
                            <input type="radio" name="active" value="Yes">Yes 
                            <input type="radio" name="active" value="No">No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Category" class="btn-primary">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    if(isset($_POST['featured'])){
                        $featured=$_POST['featured'];
                    }
                    else{
                        $featured= "No";
                    }
                    if(isset($_POST['active'])){
                        $active=$_POST['active'];
                    }
                    else{
                        $active= "No";
                    }
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name= $_FILES['image']['name'];

                        //auto rename image
                        $ext = end(explode('.',$image_name));
                        $image_name = "Book_Category_".rand(000,999).'.'.$ext;

                        $source_path= $_FILES['image']['tmp_name'];

                        $destination_path= "../Images/category/".$image_name;

                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false){
                            $_SESSION['upload']= "<div class='error'>Failed to upload image.</div>";
                            header('location: addCategory.php');
                            die();
                        }
                    }
                    else{
                        $image_name= "";
                    }

                    $sql="INSERT INTO category SET
                        title='$title',
                        image_name='$image_name',
                        featured='$featured',
                        active='$active' ";
                    $result= mysqli_query($conn, $sql);

                    if($result){
            
                        $_SESSION['add'] = "<div class='success'>Category Added Successfully!</div>";
                        header('location:adminCategory.php');
                    }
                    else{
                        
                        $_SESSION['add'] = "<div class='error'>Failed to Add Category! Please try again later.</div>";
                        header('location:addCategory.php');
                        // die ("Data is not inserted due to ".mysqli_error($conn));
                    }
                }

            ?>

            </div>
        </div>
    </div>
    
    <?php include 'adminFooter.php'; ?>

</body>
</html>