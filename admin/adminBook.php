<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'adminNavbar.php'; ?>
    <div class="userlogin">
        <h2 class="heading" >MANAGE BOOK</h2>
    
    <div class="maincontent">
        <div class="wrapper">

        <?php
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

        <a href="addBook.php" class="btn-primary">ADD BOOK</a>

        <div class="table-display">
        <table class="tbl-full">
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">Title</th>
                <th class="text-center">Price</th>
                <th class="text-center">Image</th>
                <th class="text-center">Featured</th>
                <th class="text-center">Active</th>
                <th class="text-center">Action</th>
            </tr>

            <?php
                $sql="SELECT * FROM product";
                $result= mysqli_query($conn, $sql);
                $count= mysqli_num_rows($result);
                $sn=1;
                if($count>0){
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id= $row['id'];
                        $title= $row['title'];
                        $price= $row['price'];
                        $image_name= $row['image_name'];
                        $featured= $row['featured'];
                        $active= $row['active'];
                        ?>

                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td><?php echo $title; ?></td>
                                <td>NPR.<?php echo $price; ?></td>
                                <td>
                                    <?php 
                                        if($image_name=="")
                                        {
                                            echo "<div class='error'>Image not added.</div>";
                                        }
                                        else
                                        {
                                            ?>
                                                <img src="../Images/product/<?php echo $image_name; ?>" width="80px" height="105px">
                                            <?php
                                        }
                                    ?>
                                </td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <!-- <a href="#" class="btn-update">Update Book</a> -->
                                    <a href="deleteBook.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-delete" style="font-size: 16px;">Delete Book</a>
                                </td>
                            </tr>

                        <?php
                    }
                }
                else{
                    echo "<tr><td colspan='7' class='error'> Book not added yet. </td></tr>";
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