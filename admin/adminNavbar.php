<?php include '../config/dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'adminHeader.php'; ?>
    <div class="navbarHome">
        <div class="logo">
            <a href="mainHome.php" ><img src="../Images/The BookTown-1.png" class="logo"></a>
        </div>
        <ul>
            <li><a href="adminHome.php">DASHBOARD</a></li>
            <li><a href="adminBook.php">BOOKS</a></li>
            <li><a href="adminOrder.php">ORDERS</a></li>
            <li><a href="adminUser.php">USERS</a></li>
            <li><a href="adminManage.php">ADMIN</a></li>
            <li><a href="adminLogout.php"><i class="fa fa-sign-out" style="font-size:24px"></i></a></li>
        </ul>
    </div>
</body>
</html>