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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
         </div>
    </section>    

    <section id="productdetails" class="section-p1"> 
        <div class="single-product-image">
            <img src="img/Products/pro1.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-grp">
                <div class="small-img-col">
                    <img src="img/Products/pro1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Products/pro2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Products/pro3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Products/pro4.webp" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-product-details">
            <h6>Home / Top</h6>
            <h4>Purple Hues Cropped Long-Sleeved Top</h4>
            <h2>2000</h2>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>The ultra cotton top is made from a substantial 6.0 oz. per sq.yd. fabric constructed from 100% cotton,this classic fit provides unmatched comfort.
            </span>
        </div>
    </section>

    <section id="products" class="section-p1">
        <h2>Featured Products</h2>
        <p>Captivating Looks For Your Summertime Daydreams</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/p1.jpg" alt="">
                <div class="des">
                    <span>Nordstrom</span>
                    <h5>Dandalion Chiffon Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p2.jpg" alt="">
                <div class="des">
                    <span>Princess Polly</span>
                    <h5>Lavender Silk Skirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p3.jpg" alt="">
                <div class="des">
                    <span>Mango</span>
                    <h5>Olive Drop Shoulder T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p4.jpg" alt="">
                <div class="des">
                    <span>Missguided</span>
                    <h5>Maroon Mandarin Satin Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>

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
            <p> © All Rights Reserved By WearCute.</p>
        </div>

    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>

     <script src="script.js"></script>

</body>

</html>