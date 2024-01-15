<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
</head>
<body>
    <?php 
        include 'navbar.php'; 
    ?>
    
    <div class="userlogin">
        <h2 class="heading">ADMIN LOGIN PANEL</h2>
    		<div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="adminLogin.php" method="post">
                     <legend class="text-center" style="padding:5px; font-family: Monotype Corsiva; font-size:28px; font-weight:bold;">| Login to Access Admin Panel |</legend>
                     <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div><br>
                         <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div> <br>
                        <div class="form-group text-center">
                            <button class="btn btn-secondary " name="submit">LOGIN AS ADMIN</button>
							<br><br> 
                        </div>
                    </form>
                </div>
            
     
            
    <?php
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name= $_POST['name'];
            $user= $_POST['user'];
            $pass= $_POST['pass'];

            include './config/dbconnect.php';

            $sql= "Select * From admin where user='$user' and pass='$pass' and name='$name'";
            $result= mysqli_query($conn, $sql);
            $totalrows=mysqli_num_rows($result);
            if($totalrows==1){
                $_SESSION['name']= $name;
                header('location:admin/adminHome.php');
            }
            else{
                echo "Invalid username or password!";
            }
        }
    ?>
</div>
</div>
</body>
</html>