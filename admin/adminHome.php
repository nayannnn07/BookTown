<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>

    <?php include 'adminNavbar.php'; ?>
    <div class="userlogin">
        
        <h2 class="heading" style="font-weight: 600; font-family: 'Courier New', Courier, monospace; text-transform: uppercase;">WELCOME TO THE BOOKTOWN, ADMIN 
            <?php 
                if(isset($_SESSION['name'])){
                    echo $_SESSION['name'];
                }
            ?>
        </h2>

        <div class="maincontent">
            <div class="wrapper">
                 <h2 style="font-size:40px;">DASHBOARD</h2><br>

                <div class="column-4 text-center"> 
                    <?php
                     $sql= "SELECT * FROM product";
                     $result = mysqli_query($conn, $sql);
                     $count= mysqli_num_rows($result);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br/>
                    BOOKS
                </div>

                <div class="column-4 text-center" >
                <?php
                     $sql= "SELECT * FROM orderdetail";
                     $result = mysqli_query($conn, $sql);
                     $count= mysqli_num_rows($result);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br/>
                    ORDERS
                </div>

                <div class="column-4 text-center">
                <?php
                     $sql= "SELECT * FROM customer";
                     $result = mysqli_query($conn, $sql);
                     $count= mysqli_num_rows($result);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br/>
                    USERS
                </div>

                <div class="column-4 text-center">
                <?php
                     $sql= "SELECT * FROM admin";
                     $result = mysqli_query($conn, $sql);
                     $count= mysqli_num_rows($result);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br/>
                    ADMINS
                </div>

                <div class="clearfix"></div>

            </div>
        </div>

    </div>

    <?php include 'adminFooter.php'; ?>
        
</body>
</html>