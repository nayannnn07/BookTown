<?php include './config/dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="navbarHome">
        <div class="logo">
            <a href="mainHome.php" ><img src="./Images/The BookTown-1.png" class="logo"></a>
        </div>
        <ul>
            <li><a href="userHome.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="product.php">BOOK</a></li>
            <li><a href="category.php">CATEGORY</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>

            <?php
                $select_rows=mysqli_query($conn, "SELECT * FROM cart") or die('query failed');
                $row_count = mysqli_num_rows($select_rows);
            ?>

            <li><a href="cart.php">CART <span><?php echo $row_count; ?></span> </a></li>
            <li><a href="userLogout.php"><i class="fa fa-sign-out" style="font-size:24px"></i></a></li>
        </ul>
    </div>
</body>
</html>