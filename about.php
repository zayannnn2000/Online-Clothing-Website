<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" conten="width=device-width, initial-scale=1.0">
    <title>Online Shopping Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
 </head>

 <body>

    <section id="header">
         <a href="#"><img src="img/logo.png" class="logo" alt=""</a>

         <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
         </div>
    </section>    

    <section id="page-header" class="about-header">

         <h2>#Know us!!</h2>
         <p>You can read all about us</p>

    </section>

    <section id="about-head" class="section-p1">
        <img src="img/About/about6.jpg" alt="">
        <div>
            <h2>Who are we?</h2>
            <p>Welcome to your ultimate destination for a seamless and delightful online shopping experience. We bring you an extensive collection of high-quality products from renowned brands, all in one convenient virtual marketplace.We take pride in our exceptional customer service. Our dedicated support team is ready to assist you with any inquiries, ensuring that your shopping experience exceeds expectations. We value your feedback and continuously work to improve our services, striving to meet and exceed your shopping needs.</p>
            <abbr title="">We strive to provide our customers with an unparalleled shopping journey.</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%" >Start exploring now and indulge in the joy of online shopping at its finest. Shop with confidence and convenience, knowing that we are committed to delivering exceptional products and service every step of the way.</marquee>


        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/aboutvid.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/f1.png" alt-"">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/f2.png" alt-"">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/f3.png" alt-"">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/f4.png" alt-"">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/f5.png" alt-"">
            <h6>Happy Shopping</h6>
        </div>
        <div class="fe-box">
            <img src="img/f6.png" alt-"">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters!</h4>
            <p>Get email updates about latest items and special offers</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" id="form">
            
        
                <button class="normal" onclick="message()">Sign Up</button> 
            
        </div>
        <div class="message">
            <div class="success" id="success">Thank You!</div>
            <div class="danger" id="danger">Try Again!</div>
        </div>
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
            <a href="about.php">About Us</a>
            <a href="about.php">Delivery Information</a>
            <a href="about.php">Privacy Policy</a>
            <a href="about.php">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="blog.php">Blogs</a>
            <a href="contact.php">Track My Order</a>
            <a href="contact.php">Help</a>
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
            <p> © All Rights Reserved By WearCute. </p>
        </div>

    </footer>

     <script src="script.js"></script>

</body>

</html>