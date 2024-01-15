<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
</head>
<body>
    <?php include 'userNavbar.php'; ?>

    <div class="userlogin">
    <h2 class="heading">CONTACT US</h2>
        <div class="contact-row">
            <div class="contact-image" align="center">
                <img src="Images/c1.jfif">
                <img src="Images/c2.jpg">
                <img src="Images/c3.jpg">
            </div>
            <h4 align="center" style="font-family:Lucida Handwriting; margin:40px 0px 50px; font-weight: bold; font-size:30px; ">Love Books? Don't hesitate to visit us then!</h4>
            <div class="contact-section">
                <div class="contact-info">
                    <div><i class="fa fa-phone" style="font-size:18px"> &nbsp;<b>9840012570</b></i></div>
                    <div><i class="fa fa-instagram" style="font-size:18px"> &nbsp;<b>thebooktownzz:)</b></i></div>
                    <div><i class="fa fa-envelope" style="font-size:18px"> &nbsp;<b>TheBookTown07@gmail.com</b></i></div>
                </div>  
                <div class="contact-form">
                    <h2>GET IN TOUCH</h2>
                    <form class="contact" action="" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required><br>
                        <input type="text" name="phone" class="text-box" placeholder="Your Contact" required><br>
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <center><button class="button-40" role="button">SEND</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $contact=$_POST['phone'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        include 'dbconnect.php';

        $sql="Insert into feedback
                VALUES ('$name', '$contact', '$email', '$message')";
        $result= mysqli_query($conn, $sql);

        if($result){
            
            header('location:contactus.php');
        }
        else{
            die ("Data is not inserted due to ".mysqli_error($conn));
        }
    }
?>

<?php include 'footer.php'; ?>
    
</body>
</html>
