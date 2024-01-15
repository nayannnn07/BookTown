<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN REGISTRATION</title>
</head>
<body>
    <?php include 'adminNavbar.php'; ?>
        <div class="userlogin">
            <h2 class="heading">ADMIN REGISTRATION</h2>
        
            <div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="adminRegister.php" method="post">
                     <legend class="text-center" style="padding:5px; font-family: Monotype Corsiva; font-size:30px; font-weight:bold;">| Add New Admin |</legend>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" name="email" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div> <br>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="repass" class="form-control" required>
                        </div> <br>
                        <div class="form-group text-center">
                            <button class="btn btn-secondary btn-block" name="submit">ADD ADMIN</button>
							<br><br>
                             
                        </div>
                    </form>
                </div> 
            
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $user=$_POST['user'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $repass=$_POST['repass'];

        include '../config/dbconnect.php';

        

        $user_check= "SELECT * FROM admin WHERE  user='$user'";
        $email_check = "SELECT * FROM admin WHERE email='$email'";
        $res_user = mysqli_query($conn, $user_check);
        $res_email= mysqli_query($conn, $email_check);

       if(mysqli_num_rows($res_email) > 0) {
            echo "Email already exists!!";	
        }
        else if($pass!=$repass){
            echo "Your password does not match!";
        }

        else{
            $sql="Insert into admin
                    VALUES ('$id','$name', '$user', '$email', '$pass', '$repass')";
            $result= mysqli_query($conn, $sql);

            if($result){
    
                $_SESSION['add'] = "<div class='success'>Admin Added Successfully!</div>";
                header('location:adminManage.php');
            }
            else{
                
                $_SESSION['add'] = "<div class='error'>Failed to Add Admin! Please try again later.</div>";
                header('location:adminManage.php');
            }
        }
    }
    
?>
</body>
</html>
