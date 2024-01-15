<?php
    include './config/dbconnect.php';
    if(isset($_POST['update_update_btn']))
    {
        $update_value = $_POST['update_quantity'];
        $update_id = $_POST['update_quantity_id'];
        $update_quantity_query = mysqli_query ($conn, "UPDATE cart SET quantity = '$update_value' WHERE id = '$update_id' ");
        if($update_quantity_query){
            header('location:cart.php');
        };
    };

    if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn, "DELETE FROM cart where id = '$remove_id'");
        header('location:cart.php');
    };

    if(isset($_GET['delete_all'])){
        mysqli_query($conn, "DELETE FROM cart");
        header('location:cart.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
</head>
<body>
<?php include 'userNavbar.php'; ?>

    <section class="cart">
        <h2 class="heading">SHOPPING CART</h2>

        <div class="box-container">
            <table>
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </thead>

                <tbody>

                    <?php
                        $select_cart = mysqli_query($conn, "SELECT * FROM cart");
                        $grand_total = 0;
                        if(mysqli_num_rows($select_cart) > 0){
                            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                    ?>

                    <tr>
                       <td><img src="./Images/product/<?php echo $fetch_cart['image_name']; ?>" width="80" height="110" alt=""></td> 
                        <td><?php echo $fetch_cart['title']; ?></td>
                        <td><?php echo $fetch_cart['author']; ?></td>
                        <td>NPR. <?php echo number_format($fetch_cart['price']); ?></td>
                        
                        <td> 1
                            <!-- <form action="" method="post">
                                <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?> ">
                                <input type="number" name="update_quantity" min="1" max="10" value="<?php echo $fetch_cart['quantity']; ?> ">
                                <input type="submit" value="UPDATE" name="update_update_btn">
                            </form> -->
                           
                        </td>

                        <td>NPR. <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity'] ); ?></td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Do you want to remove this item from cart?')" class="delete-btn"><i class="fa fa-trash" style="font-size:20px"></i> REMOVE</a></td>
                    </tr>

                    <?php
                        $grand_total += $sub_total;
                        };
                    };
                    ?>

                    <tr class="table-bottom">
                        <td><a href="product.php" class="option-btn" style="margin-top: 0;">CONTINUE SHOPPING</a></td>
                        <td colspan="4" style="font-weight: bolder; font-size: 22px;">GRAND TOTAL</td>
                        <td>NPR. <?php echo $grand_total; ?></td>
                        <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all the cart items?');" class="delete-btn"><i class="fa fa-trash" style="font-size:20px"></i> </a></td>
                    </tr>

                </tbody>
                
            </table>
            <div class="checkout-btn">
                <a href="order.php" class="btn btn-primary btn-lg btn-block <?= ($grand_total > 1)?'': 'disabled'; ?> ">PLACE YOUR ORDER</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>