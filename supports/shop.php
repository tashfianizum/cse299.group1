<?php
include('includes/connect.php');
include('functions/common_function.php');
session_start();
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
         
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>   
    </ul>
  </div>
  <div id="mobile">
   <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a> 
    <i id="bar" class="fa-solid fa-bars"></i>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
   <ul class="navbar-nab me-auto">
     <li class="nav-item">
        <a class="nav-link" href="#">welcome guest</a>
     </li>
     <?php
     if(!isset($_SESSION['username'])){
        echo"<li class='nav-item'>
        <a class='nav-link' href='./users_area/user_login.php'>logout</a></li>";
     }else{
        echo"<li class='nav-item'>
        <a class='nav-link' href='./users_area/user_logout.php'>login</a></li>";
     }
     ?>
        <li class="nav-item">
        <a class="nav-link" href="./users_area/user_registration.php">Register</a></li>
        </ul>
      </div>
      </div>
  
</nav>


</section>
<section id="page-header">
    
    <h2>#StayHome</h2>
    
    <p>Save more with coupons and up to 70% off</p>
    <p>Happy shopping</p>
    
</section>
<div class="bg-light">
<h3 class="text-center bg-dark">Hidden store</h3>
<p class="text-center">communication is at the heart of e-commerce and community</p>
</div>

<!-- fourth child-->
<div class="row px-3">
<div class="col-md-10">
    <!-- products-->
   <div class="row">
    <!-- fatching data-->
     <?php
     //calling function
      getproducts();
      get_unique_categories();
      get_unique_brands();
      // $ip = getIPAddress();  
      // echo 'User Real IP Address - '.$ip;
     ?>
       <!--row end-->
    </div>
    <!--column end-->
    </div>
  
       </ul>
    
<section id="pagination" class="section-p1">
    <a href="#"> 1</a>
    <a href="#"> 2</a>
    <a href="#"> <i class="fa-solid fa-arrow-right"></i></a>
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
<script src="script.js"></script>
</body>
</html>