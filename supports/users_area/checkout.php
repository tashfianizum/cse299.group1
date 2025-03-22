<!-- connect file  -->
<?php
include('../includes/connect.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="register.php">
    <link rel="stylesheet" href="login.php">
</head>
<body>
<section id="header">
  <a href="#"><img src="../logo/logo.png" class="logo" alt=""></a>
  <div>
    <ul id="navbar">
        <li><a class="active" href="../index.php">Home</a></li>  
        <li><a href="../shop.php">Shop</a></li> 
        <li><a href="../Blog.php">Blog</a></li>  
        <li><a href="../display_all.php">products</a></li>  
        <li><a class="nav-link" href="user_registration.php">Register</a></li>
        
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>   
    </ul>
  </div>
  <div id="mobile">
   <a href="../cart.php"><i class="fa-solid fa-bag-shopping"></i></a> 
    <i id="bar" class="fa-solid fa-bars"></i>
</div>
  <!-- <div id="mobile">
  <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
  </div> -->
</section>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
   <ul class="navbar-nab me-auto">
     <li class="nav-item">
        <a class="nav-link" href="#">welcome guest</a>
     </li>
     <?php
     if(!isset($_SESSION['username'])){
        echo"<li class='nav-item'>
        <a class='nav-link' href='user_login.php'>login</a></li>";
     }else{
        echo"<li class='nav-item'>
        <a class='nav-link' href='logout.php'>logout</a></li>";
     }
     ?>
        <li class="nav-item">
        <a class="nav-link" href="users_area/user_registration.php">Register</a></li>
    </ul>
      </div>
 
  
</nav>
<div class="row px-3">
<div class="col-md-12">
    <!-- products-->
   <div class="row">
    <?php
    if(!isset($_SESSION['username'])){
        include('user_login.php');
    }
    else{
        include('payment.php');
    }
    ?>
    </div>
    <!--column end-->
    </div>
    </div>



<div class="bg-light">
<h3 class="text-center bg-dark">Hidden store</h3>
<p class="text-center">communication is at the heart of e-commerce and community</p>
</div>


<!-- includes footer -->
 <?php
 include("../includes/footer.php")
 ?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    });
}
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    });
}

</script>
</body>
</html>