<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

    <section id="header">
         <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

         <div>
            <ul id="navbar">
                <li id="lg-bag"><a href="cartView.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><?php if(isset($_SESSION["name"])) : ?>
                    <a href="#"><h4> Welcome <?php echo $_SESSION["name"] ?> </h4></a>    
                    <li><a href="logout.php">Logout</a></li>
                    <?php else : ?>
                        <a href="login.php">Login</a>    
                        <?php endif; ?>
                 </li>
                                  
             
                
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
         </div>

         <div id="mobile">
             <i id="bar" class="fas fa-outdent"></i> 
             <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
         </div>




         
    </section>
    
    
    <section style=" float: center; padding:50px;  text-align:center;">
        
        <h3 >Success! Your order has been placed</h3>
        <a href="index.php" style="float: center; padding:20px;">Go back to shopping<i class="fa-solid fa-cart-shopping"></i></a>

    </section>    




    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo2.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Block-B, Bashundhara R/A</p>
            <p><strong>Phone:</strong> +11111111111</p>
            <p><strong>Hours:</strong> Sundays-Saturdays</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
         
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Download Our App</h4>
            <p>From App Store Or Google Play</p>
            <div row="row">
                <img src="img/app.png" alt="">
                <img src="img/google.png" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay.jpg" alt="">
        </div>      

        <div class="copyright">
            <p> © All Rights Reserved By WearCute.</p>
        </div>

    </footer>




</body>   