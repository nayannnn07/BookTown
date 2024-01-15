<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="userlogin">
        <h2 class="heading">USER LOGIN</h2>
    		<div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="userLogin.php" method="post"><legend class="text-center" style="padding:5px; font-family: Monotype Corsiva; font-size:30px; font-weight:bold;">| Login to Continue |</legend>
                        
                         <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div> <br>
                        <div class="form-group text-center">
                            <button class="btn btn-secondary btn-block" name="submit">LOGIN</button>
							<br><br>
                            <p> New here? <a href="userRegister.php">Register </a> your account first!</p>  
                        </div>
                    </form>
                </div>
            </div>
     </div>

     

     <?php
        // session_start();
        if(isset($_POST['submit'])){
            $user= $_POST['user'];
            $pass= $_POST['pass'];

            include './config/dbconnect.php';

            $sql= "Select * From customer where user='$user' and pass='$pass' ";
            $result= mysqli_query($conn, $sql);
            $totalrows=mysqli_num_rows($result);
            if($totalrows==1){
                $_SESSION['user']=$user;
                header('location:userHome.php');
            }
            else{
                echo "Invalid username or password!";
            }
        }
    ?>

<?php include 'mainFooter.php'; ?>

</body>
</html>
