<?php
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<section id="header">
<a href="#"><img src="logo/logo.png" class="logo" alt=""></a>
<div>
<ul id="navbar">
        <li><a class="active" href="index.php">Home</a></li>  
        <li><a href="shop.php">Shop</a></li> 
        <li><a href="blog.php">Blog</a></li>  
        <li><a href="display_all.php">products</a></li>  
        <li><a class="nav-link" href="./users_area/user_registration.php">Register</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#">Total price:<?php
          total_cart_price();
        ?>-tk 
        </a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
        <?php
        cart_item();
        ?>
        </sup></a></li>
        <form class="d-flex" action="search_product.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
       <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
    </form>  
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>   
    </ul>
  </div>
<div id="mobile">
   <a href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
    <i id="bar" class="fa-solid fa-bars"></i>
</div>
</section>
<section id="productdetails" class="section-p1">
    <div class="single-pro-image">
        <img src="logo/products/f1.jpg" width="50%" id="MainImg" alt="">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="logo/products/f1.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="logo/products/f2.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="logo/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="logo/products/f4.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Home/ T-shirt</h6>
        <h4>Men's Fashion T-shirts</h4>
        <h2>1200tk</h2>
        <select >
            <option>Select size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
            <option>Extra Small</option>
        </select>
        <input type="number"value="1">
        <button class="normal">Add to cart</button>
        <h4>Product details</h4>
        <span>This product is so confortable.This product is so confortable.This product is so confortable.This product is so confortable. </span>
    </div>
</section>
<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
    <div class="pro">
        <div class="des">
            <span>adidas</span>
        <img src="logo/products/n1.jpg" alt="">
          <h5>cartoon astronaut T-shirt</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <h4>7800tk</h4>

        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
    <div class="pro">
        <img src="logo/products/n2.jpg" alt="">
        <div class="des">
            <span>adidas</span>
            <h5>cartoon astronaut T-shirt</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <h4>7800tk</h4>

        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
    <div class="pro">
        <img src="logo/products/n3.jpg" alt="">
        <div class="des">
            <span>adidas</span>
            <h5>cartoon astronaut T-shirt</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <h4>7800tk</h4>

        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
    <div class="pro">
        <img src="logo/products/n4.jpg" alt="">
        <div class="des">
            <span>adidas</span>
            <h5>cartoon astronaut T-shirt</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <h4>7800tk</h4>

        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
  </div>
    
</section>

<section id="Neswletter" class="section-p1 section-m1">
    <div class="NewsText">
        <h2>Sign up to our newsletter</h2>
        <p>Get E-mail updates about our latest shopand  <span> special offers</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Enter your email address">
        <button class="normal">Sign Up</button>
    </div>

</section>
<footer class="section-p1">
    <div class="column">
        <img class="logo" src="logo/logo.png" alt="">
        <h4> Contact</h4>
        <p><strong>Address:</strong> Block-C Aftabtuddin road ,road 1, Bashundhara R/A</p>
        <p><strong>Phone:</strong> +8801874562368</p>
        <p><strong>Hours:</strong>10.00-18.00</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View cart</a>
        <a href="#">My wishlist</a>
        <a href="#">Track my order</a>
        <a href="#">help</a>
    </div>
    <div class="col Install" >
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="logo/pay/app.jpg" alt="">
            <img src="logo/pay/play.jpg" alt="">
        </div>
        <p>Secutred payment Gateways</p>
        <img src="logo/pay/pay.png" alt="">
    </div>
    <div class="copyright">
        <p>@ 2025, Tashfia Adibazaman Nizum 2131228642</p>
    </div>
</footer>
<script>
var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[0].onclick = function(){
    MainImg.src = smallimg[0].src;
}
</script>
<script>
var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[1].onclick = function(){
    MainImg.src = smallimg[1].src;
}
</script>
<script>
var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[2].onclick = function(){
    MainImg.src = smallimg[2].src;
}
</script>
<script>
var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[3].onclick = function(){
    MainImg.src = smallimg[3].src;
}
</script>
<script src="script.js"></script>
</body>
</html>