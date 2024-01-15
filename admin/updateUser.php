<?php include 'adminNavbar.php'; ?>

<div class="userlogin">
        <h2 class="heading">UPDATE USER</h2>
    
    <div class="maincontent">
        <div class="wrapper">

        <?php 
            $id= $_GET['id'];
            $sql="SELECT * FROM customer WHERE id=$id";
            $result= mysqli_query($conn, $sql);
            if($result){
                $count= mysqli_num_rows($result);
                if($count==1){
                    $row= mysqli_fetch_assoc($result);
                    $user= $row['user'];
                    $email= $row['email'];
                }
                else{
                    header('location: adminUser.php');
                }
            }
        ?>
        
        <div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" value="<?php echo $user; ?>" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
                        </div><br>
                        <div class="form-group text-right">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" >
                            <button class="btn btn-secondary btn-block" name="submit">UPDATE USER</button>
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
        $user=$_POST['user'];
        $email=$_POST['email'];

        $sql="UPDATE customer SET
        user = '$user',
        email = '$email'
        WHERE id='$id' ";
        $result= mysqli_query($conn, $sql);
        if($result){
    
            $_SESSION['update'] = "<div class='success'>User Updated Successfully!</div>";
            header('location:adminUser.php');
        }
        else{
            
            $_SESSION['update'] = "<div class='error'>Failed to Update User! Please try again later.</div>";
            header('location:adminUser.php');
        }
   } 
?> 

<?php include 'adminFooter.php'; ?>