<?php
//     if(isset($_POST['order-btn'])){
//         $name= $_POST['full-name'];
//         $contact= $_POST['contact'];
//         $email= $_POST['email'];
//         $method= $_POST['contact'];
//         $address= $_POST['address'];

//         $cart_query = mysqli_query($conn, "SELECT * FROM cart");
//         $price_total = 0;
//         if(mysqli_num_rows($cart_query) > 0){
//             while($prooduct_item = mysqli_fetch_assoc($cart_query)){
//                $product_name[] = $product_item['name'].'('. $product_item['quantity'] .')';
//                $product_price = number_format($product_item['price'] * $product_item['quantity']);
//                $product_total += $product_price;
//             };
//         };

//         $total_product = implode(',', $product_name);
//         $detail_query = mysqli_query("INSERT INTO orderdetail(fullname, contact, email, method, address, total_product, total_price)
//         VALUES ('$name', '$contact', '$email', '$method', '$address', '$total_product', '$price_total')");

//         if($cart_query && $detail_query){
//             echo "
//                 <div class='order-message-container'>
//                 <div class='message-container'>
//                     <h3>THANK YOU FOR YOUR PURCHASE!</h3>
//                     <div class='order-detail'>
//                         <span>".$total_product."</span>
//                         <span class='total'>Total: NPR. ".$price_total."/- </span>
//                     </div>
//                     <div class='customer-details'>
//                         <p>Your Name:  <span>".$name."</span> </p>
//                         <p>Your Contact: <span>".$contact."</span> </p>
//                         <p>Your Email: <span>".$email."</span> </p>
//                         <p>Your Address: <span>".$address."</span> </p>
//                         <p>Your Payment Mode: <span></span> </p>
//                     </div>
//                     <a href='product.php' class='btn'> Continue Shopping</a>
//                 </div>
//             </div>
//             ";
//         }
//     }
// ?>



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


    <div class="userlogin">
    <h2 class="heading">PLACE YOUR ORDER</h2>
    <h3 class="text-center pb-4"  style="padding:10px; font-family: Monotype Corsiva; font-size:35px; font-weight:bold;">| Please enter your details to confirm your order |</h3>
    
    <div class="display-order">
        <?php
            $select_cart = mysqli_query($conn, "SELECT * FROM cart");
            $total=0;
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                $grand_total = $total += $total_price;
                ?>

                <span><?= $fetch_cart['title']; ?></span>

                <?php
                } 
                // else{
                //     echo "<div class='display-order'><span>Your Cart is Empty!</span></div>";
                // }
            };
        ?>
        <span class="grand-total"> GRAND TOTAL: <?= $grand_total; ?></span>
    </div>

    <div class="order-container">
            
           
            <div class="order-image">
                <img src="Images/3.jpg" width="650" height="700">
            </div>

            <div class="order-form">
            <form action="" method="post" class="order">
                
                
                    <legend class="text-center py-3" style="font-weight:bold;">DELIVERY DETAILS</legend>
                    <div class="order-label"> Name</div>
                    <input type="text" name="full-name" placeholder="Please enter your full name" class="input-responsive" required>

                    <div class="order-label">Contact</div>
                    <input type="tel" name="contact" placeholder="E.g. 9841xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. thebooktownz@gmail.com" class="input-responsive" required>

                    <div class="order-label">Payment Method</div>
                    <select name="method" class="input-responsive">
                       <option value="Cash on Delivery" selected>Cash on Delivery</option>
                    </select>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="7" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="order-btn" value="Order Now" class="btn btn-primary">
                

            </form>
            </div>

        </div>
        </div>

        <?php
            if(isset($_POST['order-btn'])){
                $name=$_POST['full-name'];
                $contact=$_POST['contact'];
                $email=$_POST['email'];
               
                $address=$_POST['address'];

                include './config/dbconnect.php';

                $sql="Insert into orderdetail (fullname, contact, email,  address)
                        VALUES ('$name', '$contact', '$email','$address')";
                $result= mysqli_query($conn, $sql);

                if($result){
                    echo "<script>
                    alert('Thank you for your purchase!');
                    window.location= 'userHome.php';
                    </script>";
                   
                }
                else{
                    die ("Data is not inserted due to ".mysqli_error($conn));
                }  
            } 
        ?>
       
        <?php include 'footer.php'; ?>

</body>
</html>