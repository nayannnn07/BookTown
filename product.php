<?php 
    include './config/dbconnect.php';
    if(isset($_POST['add_to_cart'])){
        $product_name = $_POST['product_name'];
        $product_author = $_POST['product_author'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = 1;
        

        $cart_sql="SELECT * FROM cart WHERE title= '$product_name' ";
        $cart_result= mysqli_query($conn, $cart_sql);
        $cart_count= mysqli_num_rows($cart_result);
        if($cart_count>0){
            // $message[] = 'Product already added to cart';
            // $_SESSION['add'] = "<div class='error'>Product already added to cart!</div>";
            // header('location:order.php');
            echo "<script>
            alert('Product already added to cart!');
            window.location('product.php');
            </script>";
        }
        else{
            $product_sql="INSERT INTO cart 
            (title, author, price, image_name, quantity)
            VALUES('$product_name', '$product_author', '$product_price', '$product_image', '$product_quantity') ";
            $product_result= mysqli_query($conn, $product_sql);

            echo "<script>
            alert('Product added to cart successfully!');
            window.location('product.php');
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'userNavbar.php'; ?>

        <section class="products">
            <h2 class="heading">SHOP BOOKS</h2>

            <div class="box-container">
                <?php
                     $sql="SELECT * FROM product";
                     $result= mysqli_query($conn, $sql);
                     $count= mysqli_num_rows($result);
                     if($count>0){
                        while($row=mysqli_fetch_assoc($result)){   
                ?>
                    <form action="" method="post">
                        <div class="box">
                        <div class="image">
                            <img src="<?php echo $url; ?>Images/product/<?php echo $row['image_name']; ?>"  alt="">
                        </div>   
                            <div class="bcontent">
                                <h3><?php echo $row['title']; ?> </h3>
                                
                                <div class="price"><h4><?php echo $row['author']; ?> </h4>NPR. <?php echo $row['price']; ?></div>
                            </div>
                            <input type="hidden" name="product_name" value="<?php echo $row['title']; ?>">
                            <input type="hidden" name="product_author" value="<?php echo $row['author']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $row['image_name']; ?>">

                            <input type="submit" class="cartbutton" value="ADD TO CART" name="add_to_cart">
                           
                        </div>
                    </form>
                <?php
                    };
                };
                ?>
            </div>
            <h3 style="font-family: Monotype Corsiva; font-weight: bold;" class="text-center mt-4 pt-3"> | Get your favourite books here. Happy Purchase:) | </h3>
        </section>
        
    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>