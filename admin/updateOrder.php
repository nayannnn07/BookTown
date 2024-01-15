<?php include 'adminNavbar.php'; ?>

<div class="userlogin">
    
    <div class="maincontent">
        <div class="wrapper">

        <?php 
            $id= $_GET['id'];
            $sql="SELECT * FROM orderdetail WHERE id=$id";
            $result= mysqli_query($conn, $sql);
            if($result){
                $count= mysqli_num_rows($result);
                if($count==1){
                    $row= mysqli_fetch_assoc($result);
                    $name=$rows['fullname'];
                    $contact=$rows['contact'];
                    $email=$rows['email'];
                    $address=$rows['address'];
                           
                }
                else{
                    header('location: adminOrder.php');
                }
            }
        ?>
        
       <form action="" method="POST"  class="add">
      <h1 class="h1"><b> Update Order </b></h1>
      <table class="tbl-30">
        <tr>
          <td>Name</td>
          <td><input type="text" name="fullname" value="<?php echo $name; ?>" class="box"></td>
        </tr>

        <tr>
          <td>Contact</td>
          <td><input type="text" name="contact" value="<?php echo $c; ?>" class="box"></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><input type="email" name="email" value="<?php echo $email; ?>" class="box"></td>
        </tr>

        <tr>
          <td>Address</td>
          <td><input type="text" name="address" value="<?php echo $address; ?>" class="box"></td>
        </tr>

      <tr>
        <td>
            <select name="status">
            <option value="Paid">Paid</option>
            <option value="Unpaid">Unpaid</option>
            </select>
        </td>
    </tr>

      </table>

    </form>

    <?php


      if(isset($_POST['submit'])){
        
        // echo "clicked";
        //get value from form
        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $current_image=$_POST['current_image'];
        $category=$_POST['category'];
        $featured=$_POST['featured'];
        $active=$_POST['active'];

        


        //update database
        $sql3="UPDATE products SET 
          title='$title',
          description='$description',
          price=$price,
          image_name='$image_name',
          category_id='$category',
          featured='$featured',
          active='$active'
          WHERE id=$id
        ";
        
        //ececute query
        $res3=mysqli_query($conn,$sql3);

        //redirect to manage category with message
        if($res3==TRUE){
          //category updated
          $_SESSION['update']="<div class='success'>Product Updated Successfully</div>";
          header("location:".$home.'admin/manage-products.php');

        }else{
          //failed to update category
          $_SESSION['update']="<div class='error'>Failed To Update Product</div>";
          header("location:".$home.'admin/manage-products.php');
        }


      }

    ?>

  </div>
</div>

<?php include 'adminFooter.php'; ?>