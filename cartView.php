<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" conten="width=device-width, initial-scale=1.0">
    <title>Online Shopping Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">

    <script>
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
  document.getElementById("tbody").innerHTML = this.responseText;
    }
xhttp.open("GET", "loadCart.php");
xhttp.send();

    
 </script>
 </head>

 

 <body>
 <script>
 function payment(total) {
   console.log(total);
   const xhttp = new XMLHttpRequest();
   xhttp.open("POST", "payment.php",true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhttp.onload = function() {
    header("location", "payment.php");
   }
   
   xhttp.send("value="+total);
   }
</script>

    <section id="header">
         <a href="#"><img src="img/logo.png" class="logo" alt=""/>

         <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
         </div>
    </section>    

    <section id="page-header" class="about-header">
         
         <h2>#let's_talk!!</h2>
         <p>LEAVE A MESSAGE, We love to hear from you!</p>
         
    </section>
   
    



    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>

                
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
                <td>Remove</td>

             </tr>
            </thead>
            <tbody id="tbody">
</tbody>
</table>   
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
            <p> © All Rights Reserved By WearCute. </p>
        </div>

    </footer>

     <script src="script.js"></script>

</body>

</html>