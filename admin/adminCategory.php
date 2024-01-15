<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MANAGE CATEGORY</title>
</head>
<body>
<?php include 'adminNavbar.php'; ?>
    <div class="userlogin">
        <h2 class="heading">MANAGE CATEGORY</h2>
    
    <div class="maincontent">
        <div class="wrapper">
        
        <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']); 
            }
            if(isset($_SESSION['remove'])){
                echo $_SESSION['remove'];
                unset($_SESSION['remove']); 
            }
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset($_SESSION['delete']); 
            }
        ?>
        <br>


        <!-- Button to add admin -->
        <a href="addCategory.php" class="btn-primary">ADD CATEGORY</a>
        
        <div class="table-display">
        <table class="tbl-full">
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">Title</th>
                <th class="text-center">Image</th>
                <th class="text-center">Featured</th>
                <th class="text-center">Active</th>
                <th class="text-center">Action</th>
            </tr>
            <?php
                $sql="SELECT * FROM category";
                $result= mysqli_query($conn, $sql);
                $count= mysqli_num_rows($result);
                $sn=1;
                if($result){
                   if($count>0){
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id= $row['id'];
                            $title= $row['title'];
                            $image_name= $row['image_name'];
                            $featured= $row['featured'];
                            $active= $row['active'];

                            ?>

                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $title; ?></td>

                                    <td>
                                        <?php 
                                            if($image_name!="")
                                            {
                                                ?>
                                                    <img src="../Images/category/<?php echo $image_name; ?>" width="100px" height="110px">

                                                <?php

                                            }
                                            else{
                                                echo "<div class='error'>Failed to upload image.</div>";
                                            }
                                        ?>
                                    </td>

                                    <td><?php echo $featured; ?></td>
                                    <td><?php echo $active; ?></td>
                                    <td>
                                        <a href="#" class="btn-update">Update Category</a>
                                        <a href="deleteCategory.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-delete">Delete Category</a>
                                    </td>
                                </tr>

                            <?php
                        }
                    }
                    else{
                        ?>
                        <tr>
                            <td colspan="6"><div class="error">No Category Added.</div></td>
                        </tr>
                        <?php
                        
                    }
            }
            ?>
            
        </table>
        </div>
        
        </div>
        </div>
    </div>

    <?php include 'adminFooter.php'; ?>
    
</body>
</html>