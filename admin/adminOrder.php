<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'adminNavbar.php'; ?>
    <div class="userlogin">
    <h2 class="heading" >MANAGE ORDER</h2>
    
    <div class="maincontent">
        <div class="wrapper">
        <h3><b>MANAGE ORDER</b></h3>
        
        <div class="table-display">
        <table class="tbl-full">
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">Name</th>
                <th class="text-center">Contact</th>
                <th class="text-center">Email</th>
                <th class="text-center">Address</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
            
            <?php 

                $sql="Select * from orderdetail";
                $result= mysqli_query($conn, $sql);
                if($result){
                    $count= mysqli_num_rows($result);
                    $sn=1;
                    if($count>0){
                        while($rows= mysqli_fetch_assoc($result)){
                            $id=$rows['id'];
                            $name=$rows['fullname'];
                            $contact=$rows['contact'];
                            $email=$rows['email'];
                            $address=$rows['address'];
                           
            
                            
                            ?>
                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $contact; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td>
                                    <select name="status">
                                    <option value="Paid">Paid</option>
                                    <option value="Unpaid">Unpaid</option>
                                    </select>
                                                                
                                    </td>
                                    <td>
                                        <a href="updateOrder.php?id=<?php echo $id; ?>" class="btn-update">UPDATE</a>
                                        
                                    </td>
                                </tr>

                            <?php
                        }
                    }
                }
            ?>

        </table>
        </div>
        
        </div>
        </div>
    </div>

    <?php include 'adminFooter.php'; ?>

</body>
</html>