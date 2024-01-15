<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="userlogin">
        <h2 class="heading">USER REGISTRATION</h2>
    		<div class="card col-md-4 offset-md-4 mt-4">
                <div class="card-body">
                     <form id="login-frm" action="userRegister.php" method="post">
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
                            <button class="btn btn-secondary btn-block" name="submit">REGISTER</button>
							<br><br>
                            <p>If you already have an account, <a href="userLogin.php">Login</a></p>  
                        </div>
                    </form>
                </div> 
    
     <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user=$_POST['user'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $repass=$_POST['repass'];

        include './config/dbconnect.php';

        $user_check= "SELECT * FROM customer WHERE  user='$user'";
        $email_check = "SELECT * FROM customer WHERE email='$email'";
        $res_user = mysqli_query($conn, $user_check);
        $res_email= mysqli_query($conn, $email_check);

        if (mysqli_num_rows($res_user) > 0) {
        echo "Username already exists!!";
        }
        else if(mysqli_num_rows($res_email) > 0) {
            echo "Email already exists!!";	
        }
        else if($pass!=$repass){
            echo "Your password does not match!";
        }

        else{
            $sql="Insert into customer (user, email, pass, repass)
                    VALUES ('$user', '$email', '$pass', '$repass')";
            $result= mysqli_query($conn, $sql);

           
            if($result){
                header('location:userLogin.php');
            }
            else{
                die ("Data is not inserted due to ".mysqli_error($conn));
            }
        }
    }
?>
</div> 
</div>  


<?php include 'mainFooter.php'; ?>

</body>
</html>
