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
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
         </div>
    </section>    

    <section id="page-header" class="blog-header">
         
         <h2>#Hi! You can read more about us!!</h2>
         <p>You can read all the case studies about our products!</p>
         
    </section>
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/Blog2.jpeg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton made Zip-Up Top</h4>
                <p>
                    When it comes to casual and comfortable clothing, the cotton zip-up hoodie stands as a timeless staple in many wardrobes. With its blend of practicality and style, this versatile garment has become a go-to choice for people of all ages. In this blog post, we will expose....
                </p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>21/05</h1>
        </div>  
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/blog3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Embrace Comfort with Men's Stylish and Comfortable Pants</h4>
                <p>
                    Comfortable pants are an essential part of any man's wardrobe. Gone are the days when style and comfort were mutually exclusive. Today, fashion has evolved to offer a......
                </p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>25/05</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/blog4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Embrace the Summer Breeze with Stylish Men's Shorts</h4>
                <p>As the temperature rises and the sun shines brighter, it's time to shed those layers and embrace the comfort of men's shorts. A summer essential, shorts not only offer relief from the heat but also provide an opportunity to ....</p>
                    
                <a href="#">Continue Reading</a>
            </div>
            <h1>25/05</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/Blog5.jpeg" alt="">
            </div>
            <div class="blog-details">
                <h4>Elevate Your Look with Chic and Versatile Women's Stylish Tops</h4>
                <p>
                    A well-curated collection of stylish tops is the secret to a versatile and fashionable wardrobe. Whether you're dressing up for a special occasion or putting together a casual yet chic ensemble.... 
                </p>
                <a href="#">Continue Reading</a>
            </div>
            <h1>25/05</h1>
        </div>  

            

    </section>


    <section id="pageination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fas fa-long-arrow-alt-right"></i>></a>
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