<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MANAGE ADMIN</title>
    
</head>
<body>
    <?php include 'adminNavbar.php'; ?>
    <div class="userlogin">
        <h2 class="heading"> MANAGE ADMIN</h2>
    
    <div class="maincontent">
        <div class="wrapper">
        
        <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; //Displaying session message
                unset($_SESSION['add']); //Removing session message
            }

            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete']; //Displaying session message
                unset($_SESSION['delete']); //Removing session message
            }

            if(isset($_SESSION['update'])){
                echo $_SESSION['update']; //Displaying session message
                unset($_SESSION['update']); //Removing session message
            }
        ?>
        <br> 

        <!-- Button to add admin -->
        <a href="adminRegister.php" class="btn-primary">ADD ADMIN</a>
        
        <div class="table-display">
        <table class="tbl-full">
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">NAME</th>
                <th class="text-center">USERNAME</th>
                <th class="text-center">ACTION</th>
            </tr>

            <?php 
                $sql="Select * from admin";
                $result= mysqli_query($conn, $sql);
                if($result){
                    $count= mysqli_num_rows($result);
                    $sn=1;
                    if($count>0){
                        while($rows= mysqli_fetch_assoc($result)){
                            $id=$rows['id'];
                            $name=$rows['name'];   
                            $user=$rows['user'];
                            
                            ?>
                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $user; ?></td>
                                    <td>
                                        <a href="updateAdmin.php?id=<?php echo $id; ?>" class="btn-update">Update Admin</a>
                                        <a href="deleteAdmin.php?id=<?php echo $id; ?>" class="btn-delete">Delete Admin</a>
                                    </td>
                                </tr>

                            <?php
                        }
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