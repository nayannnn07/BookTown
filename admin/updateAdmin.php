<?php include 'adminNavbar.php'; ?>

<div class="userlogin">
        <h2 class="heading">UPDATE ADMIN</h2>
    
    <div class="maincontent">
        <div class="wrapper">
        
        <?php 
            $id= $_GET['id'];
            $sql="SELECT * FROM admin WHERE id=$id";
            $result= mysqli_query($conn, $sql);
            if($result){
                $count= mysqli_num_rows($result);
                if($count==1){
                    $row= mysqli_fetch_assoc($result);
                    $name= $row['name'];
                    $user= $row['user'];
                }
                else{
                    header('location: adminManage.php');
                }
            }
        ?>
        
        <div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" value="<?php echo $user; ?>" class="form-control" required>
                        </div><br>
                        <div class="form-group text-right">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" >
                            <button class="btn btn-secondary btn-block" name="submit">UPDATE ADMIN</button>
							<br><br>
                             
                        </div>
                    </form>
                </div>
        </div> 
    </div> 
</div>    
</div> 

<?php
   if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $user=$_POST['user'];

        $sql="UPDATE admin SET
        name = '$name',
        user = '$user'
        WHERE id='$id' ";
        $result= mysqli_query($conn, $sql);
        if($result){
    
            $_SESSION['update'] = "<div class='success'>Admin Updated Successfully!</div>";
            header('location:adminManage.php');
        }
        else{
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Admin! Please try again later.</div>";
            header('location:adminManage.php');
        }
   } 
?> 

<?php include 'adminFooter.php'; ?>