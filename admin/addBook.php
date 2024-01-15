<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOK</title>
</head>
<body>
    <?php include 'adminNavbar.php'; ?>

    <div class="userlogin">
            <h2 class="heading">ADD BOOKS</h2>
        
        <div class="maincontent">
            <div class="wrapper">

            <?php
                
                if(isset($_SESSION['upload'])){
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']); 
                }
                // if(isset($_SESSION['add'])){
                //     echo $_SESSION['add'];
                //     unset($_SESSION['add']); 
                // }
            ?>

            <br>
            <form action="" method="POST" enctype="multipart/form-data">

                <table class="tbl-form">
                    <tr>
                        <td>Title</td>
                        <td>
                            <input type="text" name="title" placeholder="Title of the Book">
                        </td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td>
                            <input type="text" name="author" placeholder="Author of the Book">
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>
                            <input type="number" name="price" >
                        </td>
                    </tr>
                    <tr>
                        <td>Select Image</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category</td>
                        <td>
                            <select name= "category">

                                <?php
                                    $sql= "SELECT * from category where active='Yes'";
                                    $result= mysqli_query($conn, $sql);
                                    $count= mysqli_num_rows($result);
                                    if($count>0)
                                    {
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id= $row['id'];
                                            $title= $row['title'];
                                           ?>

                                            <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                           <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <option value="0">No Category Found</option>
                                        <?php
                                    }
                                ?>  
                            </select>
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
                        <td >
                            <input type="submit" name="submit" value="Add Book" class="btn-primary">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="color:white; padding:1px; background-color:#593D3B;"><small> <i class="fa fa-angle-double-left" style="font-size:20px"></i> BACK TO <a href='adminBook.php' style="text-decoration: none; color:white; ">MANAGE BOOKS</a></small></div>
                        </td>
                    <tr>
                </table>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    $author=$_POST['author'];
                    $price=$_POST['price'];
                    $category=$_POST['category'];
                    
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
                        $image_name = $_FILES['image']['name'];

                        if($image_name!=""){
                            //auto rename image
                            @$ext = end(explode('.',$image_name));
                            $image_name = "Book_Category_".rand(000,999).'.'.$ext;

                            $src= $_FILES['image']['tmp_name'];

                            $dst= "../Images/product/".$image_name; 

                            $upload = move_uploaded_file($src, $dst);

                            if($upload==false){
                                $_SESSION['upload']= "<div class='error'>Failed to upload image.</div>";
                                header('location: addBook.php');
                                die();
                            }
                        }
                    }
                    else{
                        $image_name= "";
                    }

                    $sql2="INSERT INTO product SET
                        title='$title',
                        author='$author',
                        price= $price,
                        image_name='$image_name',
                        category_id= $category,
                        featured='$featured',
                        active='$active' ";
                    $result2= mysqli_query($conn, $sql2);

                    if($result2){
            
                        $_SESSION['add'] = "<div class='success'>Book Added Successfully!</div>";
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); 
                        // header('location:admin/adminBook.php');
                       
                        
                    }
                    else{
                        
                        $_SESSION['add'] = "<div class='error'>Failed to Add Book! Please try again later.</div>";
                        echo $_SESSION['add'];
                        unset($_SESSION['add']); 
                        // header('location:adminBook.php');
                    }
                }

            ?>

            </div>
        </div>
    </div>
    <?php include 'adminFooter.php'; ?>

</body>
</html>