<!-- connect file  -->
<?php
include('./includes/connect.php');
include('./functions/common_function.php');
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
     <link rel="stylesheet" href="style.css">
   <style>
    body{
      overflow-x: hidden;
    }
   </style>
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
   <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a> 
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
        <a class='nav-link' href='./users_area/user_login.php'>login</a></li>";
     }else{
        echo"<li class='nav-item'>
        <a class='nav-link' href='./user_area/logout.php'>logout</a></li>";
     }
     ?>
        <li class="nav-item">
        <a class="nav-link" href="./users_area/user_registration.php">Register</a></li>
        </ul>
      </div>
      </div>
  
</nav>
<!-- cart -->
 <?php
cart();
 ?>

<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>super value deals</h2>
    <h1>on all products</h1>
    <p>Get up to 50% off on selected items</p>
    <p>Happy shopping</p>
    <button>shop now</button>
</section>
<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="logo/f1.png" alt="">
        <h6>Free shipping </h6>

    </div>
    <div class="fe-box">
        <img src="logo/f2.png" alt="">
        <h6>Online order</h6>

    </div>
    <div class="fe-box">
        <img src="logo/f3.png" alt="">
        <h6>save money </h6>

    </div>
    <div class="fe-box">
        <img src="logo/f4.png" alt="">
        <h6>promotions</h6>

    </div>
    <div class="fe-box">
        <img src="logo/f5.png" alt="">
        <h6>Happy sell</h6>

    </div>
    <div class="fe-box">
        <img src="logo/f6.png" alt="">
        <h6>Support </h6>

    </div>

</section>
<section id="product1" class="section-p1">
    <h2>Featured products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
    <div class="pro">
        <div class="des">
            <span>adidas</span>
        <img src="logo/products/f1.jpg" alt="">
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
        <img src="logo/products/f2.jpg" alt="">
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
        <img src="logo/products/f3.jpg" alt="">
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
        <img src="logo/products/f4.jpg" alt="">
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
        <img src="logo/products/f5.jpg" alt="">
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
        <img src="logo/products/f6.jpg" alt="">
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
        <img src="logo/products/f7.jpg" alt="">
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
        <img src="logo/products/f8.jpg" alt="">
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
        <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>
    </div>
    </div>
    
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
    <!-- <div class="col-md-4 mb-2">
    
    <div class="card">
  <img src="logo/products/f1.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">T-shirt</h5>
    <p class="card-text">You can try many T-shirts</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div> -->
    <!-- <div class="col-md-4 mb-2">
    <div class="card" >
  <img src="logo/products/f2.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">floral T-shirt</h5>
    <p class="card-text">Try something new for your vacation</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card" >
  <img src="logo/products/f3.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">comfii</h5>
    <p class="card-text">This is your comfort zone</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card">
  <img src="logo/products/f4.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">white based</h5>
    <p class="card-text">Do you like white?!!</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card" >
  <img src="logo/products/f5.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Pants</h5>
    <p class="card-text">Try many collection</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
    <div class="card"  >
  <img src="logo/products/f6.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">woman</h5>
    <p class="card-text">This is for woman</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">view more</a>
  </div>
</div> -->
 
       </ul>
    <div class="col-md-2 bg-secondary p-0">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php
    getbrands();
    // while ($row_data = $result_brands->fetch_assoc()) {
        //$brand_id = $row_data['brand_id'];
        //$brand_title = $row_data['brand_title'];
       // echo "<li class='nav-item'>
           // <a href='index.php?brand= $brand_id' class='nav-link text-light'>$brand_title</a>
         // </li>";
    //}
     // $row_data = mysqli_fetch_assoc($result_brands);
    // if ($row_data) {
        // echo $row_data['brand_title'];
     //} else {
        // echo "No data found.";
    // }

    // while ($row_data = mysqli_fetch_assoc($result_brands)) {
       // $brand_title = $row_data['brand_title'];
       // $brand_id = $row_data['brand_id'];
       // echo "<li class='nav-item'>
       // <a href='#' class='nav-link text-light'></a>
      //</li>";
   // }

      // Fetch and display the results
      //<li class="nav-item ">
       // <a href="#" class="nav-link text-light">Delivery Brands2</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands3</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands4</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands5</a>
      //</li>

      //<li class="nav-item ">
        //<a href="#" class="nav-link text-light"> categories1</a>
      //</li>
      //<li class="nav-item ">
        //<a href="#" class="nav-link text-light"> categories2</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories3</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories4</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories5</a>
      //</li>

     ?>
     </ul>
     <!-- categories to be displayed -->
      <ul>
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      
     <?php
      getcategories();

    // while ($row_data = $result_brands->fetch_assoc()) {
        //$brand_id = $row_data['brand_id'];
        //$brand_title = $row_data['brand_title'];
       // echo "<li class='nav-item'>
           // <a href='index.php?brand= $brand_id' class='nav-link text-light'>$brand_title</a>
         // </li>";
    //}
     // $row_data = mysqli_fetch_assoc($result_brands);
    // if ($row_data) {
        // echo $row_data['brand_title'];
     //} else {
        // echo "No data found.";
    // }
   

   // while ($row_data = mysqli_fetch_assoc($result_brands)) {
       // $brand_title = $row_data['brand_title'];
       // $brand_id = $row_data['brand_id'];
       // echo "<li class='nav-item'>
       // <a href='#' class='nav-link text-light'></a>
      //</li>";
   // }
    
   
      // Fetch and display the results
      //<li class="nav-item ">
       // <a href="#" class="nav-link text-light">Delivery Brands2</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands3</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands4</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light">Delivery Brands5</a>
      //</li>

      //<li class="nav-item ">
        //<a href="#" class="nav-link text-light"> categories1</a>
      //</li>
      //<li class="nav-item ">
        //<a href="#" class="nav-link text-light"> categories2</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories3</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories4</a>
      //</li>
      //<li class="nav-item">
        //<a href="#" class="nav-link text-light"> categories5</a>
      //</li>

     ?>
    </ul>
     
    </div>
    </div>

<section id="banner" class="section-m1">
    <h4>Repair services</h4>
    <h2>up to <span>70% off</span> -All T-shirts and accessories</h2>
    <button class="normal">Explore more</button>

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

    <div class="pro">
        <img src="logo/products/n5.jpg" alt="">
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
        <img src="logo/products/n6.jpg" alt="">
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
        <img src="logo/products/n7.jpg" alt="">
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
        <img src="logo/products/n8.jpg" alt="">
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
        <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></a>
    </div>
    </div>
    
</section>
<section id="sm-banner" class="section-p1">
   <div class="banner-box">
    <h4> Crazy deals</h4>
    <h2>Buy 1 get 1 free</h2>
    <span>The best classic dress is on sale at cara</span>
    <button class="white">Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4> spring/summer</h4>
        <h2>Upcoming season</h2>
        <span>The best classic dress is on sale at cara</span>
        <button  class="white">collection</button>
        </div>
</section>
<section id="banner3">
    <div class="banner-box">
        <h2>Seasonal sale</h2>
        <h3>winter collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>new footware collection</h2>
            <h3>Spring/Summer 2025</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-shirts</h2>
                <h3>Now trendy prints </h3>
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
<!-- includes footer -->
 <?php
 include("./includes/footer.php")
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