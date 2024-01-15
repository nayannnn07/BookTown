<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="home">
    <div class="banner">
        <div class="content">
            <h1>THE BOOKTOWN</h1> 
            <h4>Books for every little phase of your life!</h4>  
        </div>
        <div class="welcome">
            <p>WELCOME TO THE BOOKTOWN! <br/>GET LOST IN A WORLD OF FICTION AND FANTASY WITH US</p>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="services py-5 bg-light" id="choose_us">
        <div class="container" >
            <h1 class="text-center pb-5" >WHY CHOOSE US?</h1>
            <div class="row pb-3">
                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fa-solid fa-sack-dollar"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Lowest Price</h4>
                            <p>We provide you with the books you want at lowest prices possible.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fa-solid fa-truck"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Fastest Delivery</h4>
                            <p>All the orders placed will be delivered within 48 hours, If not same day!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                                <span><i class="fa-solid fa-book"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">Buy Books Online</h4>
                            <p>Easily discover new reads and stock you shelves at the comfort of your home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOK STACK -->
    <section class="choose_books">
        <div class="container-fluid">
            <div class="choose_books_content">
                <h4>THE BOOKTOWN HAS THE COLLECTION YOU WILL LOVE</h4> 
                <a href="userLogin.php" class="button-74">EXPLORE NOW</a>
            </div>
        </div>
    </section>

    <!-- SHOP BOOKS -->
    <section class="products services py-5 bg-light" id="products">
    <h1 class="text-center pb-5" style="font-family: 'Prata', sans-serif;" >SHOP BOOKS</h1>
         <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book1.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>IT ENDS WITH US</h3>
                    <h4>by Colleen Hoover</h4>
                    <div class="price">NPR.500.00</div>
                </div>
                <button class="cartbutton" ><a href="userLogin.php" style="text-decoration:none; color:white;" >ADD TO CART</a></button>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/35.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>KING OF WRATH</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.950.00</div>
                </div>
                <button class="cartbutton" ><a href="userLogin.php" style="text-decoration:none; color:white;" >ADD TO CART</a></button>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book14.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>SHATTER ME</h3>
                    <h4>by Tahereh Mafi</h4>
                    <div class="price">NPR.700.00</div>
                </div>
                <button class="cartbutton" ><a href="userLogin.php" style="text-decoration:none; color:white;" >ADD TO CART</a></button>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book24.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>HARRY POTTER</h3>
                    <h4>by JK Rowling</h4>
                    <div class="price">NPR.900.00</div>
                </div>
                <button class="cartbutton" ><a href="userLogin.php" style="text-decoration:none; color:white;" >ADD TO CART</a></button>
            </div>


        </div> 
        <center><button class="button-45 text-center mt-4" role="button" onclick="product.php"><a href="userLogin.php" style="text-decoration:none; color:black;">LOAD MORE..</a></button></center>
    </section>

   <!-- OUR TOP PICKS -->
    <section class="products services py-5 bg-light" id="products">
    <h1 class="text-center pb-5" style="font-family: 'Prata', sans-serif; border-top: 2px solid black; padding:2rem " >OUR TOP PICKS</h1>
         <div class="box-container" >

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book1.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>IT ENDS WITH US</h3>
                    <h4>by Colleen Hoover</h4>
                    <div class="price">NPR.500.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/38.jpg" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>TWISTED LIES</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.550.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book9.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>KARNALI BLUES</h3>
                    <h4>by Buddhisagar</h4>
                    <div class="price">NPR.450.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/book16.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>UGLY LOVE</h3>
                    <h4>by Colleen Hoover</h4>
                    <div class="price">NPR.450.00</div>
                </div>
            </div>


        </div> 
    </section>
    
    
<!-- OUR NEW ARRIVALS -->
<section class="products services py-5 bg-light" id="products">
    <h1 class="text-center pb-5 " style="font-family: 'Prata', sans-serif; border-top: 2px solid black; padding:2rem;" >OUR LATEST ARRIVALS</h1>
         <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="Images/Book/36.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>TWISTED GAMES</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.500.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/37.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>TWISTED HATE</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.500.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/38.JPG" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>TWISTED LIES</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.500.00</div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Images/Book/39.jfif" alt="">
                </div>
        
                <div class="bcontent">
                    <h3>TWISTED LOVE</h3>
                    <h4>by Ana Huang</h4>
                    <div class="price">NPR.500.00</div>
                </div>
            </div>


        </div> 
    </section>

     <!-- CUSTOMER REVIEW -->
     <section class=" services py-5 bg-light" id="products">
    <h1 class="text-center pb-5" style="font-family: 'Prata', sans-serif; border-top: 2px solid black; padding: 2rem; " >CUSTOMER REVIEW</h1>
    <div class="review-slider">
    <div class="row pb-3">
        <div class="col-lg-4 mb-3">
            <div class="card text-center py-3">
                <div class="card-body">
                <div class="box">
                    <img src="Images/review/1.jpg">
                    <p>I recently discovered THE BOOKTOWN website and I'm thrilled with the service. I found several titles that I've been searching for. I highly recommend this book website for anyone looking for a wide selection of books at great prices and excellent service. I will definitely be a repeat customer!</p>
                    <h3>Krisha Manandhar</h3>
                    <div class="stars">
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star-half" style="color:orange;"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card text-center py-3">
                <div class="card-body">
                <div class="box">
                    <img src="Images/review/4.jfif">
                    <p>Books arrived within two days of placing my order. Will definitely purchase all my books via this website in the future.
                    The BookTown is very user friendly and titles are easy to find. Prices are competitive and the customer services are also excellent. The checkout process was easy and smooth. </p>
                    <h3>Sirish Shahi</h3>
                    <div class="stars">
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star-half" style="color:orange;"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card text-center py-3">
                <div class="card-body">
                <div class="box">
                    <img src="Images/review/2.jpg">
                    <p>My experience with The BookTownso far has been impressive. It has both good collection and very good customer friendly service. Even though it is an online portal but still has an experience of buying from a shop. I strongly recommend this store for anyone who wants to buy books. </p>
                    <h3>Amy Shakya</h3>
                    <div class="stars">
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star" style="color:orange;"></i>
                        <i class="fa fa-star-half" style="color:orange;"></i>
                    </div>
                </div>
                </div>
            </div>
        </div>

     </div>
     </div>  
    </section>

    <?php include 'mainFooter.php'; ?>

</div>
</body>
</html>