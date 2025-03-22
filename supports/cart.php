<!-- connect file  -->
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
   
    <title>E-Commerce Website-cart details</details></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    
    <style>.cart_img{
      width:80px ;
      height:80px ;
      object-fit: contain;
    }</style>
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
        
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
        <?php
        cart_item();
        ?>
        </sup></a></li>
         <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>   
    </ul>
  </div>
  <div id="mobile">
   <a href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
    <i id="bar" class="fa-solid fa-bars"></i>
</div>
  <!-- <div id="mobile">
  <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
        <?php
        cart_item();
        ?>
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
        <a class='nav-link' href='./users_area/user_logout.php'>logout</a></li>";
     }
     ?>
        <a class="nav-link" href="./users_area/user_registration.php">Register</a></li>
    </ul>
      </div>
     </ul>
   </div>
 
  
</nav>
<!-- cart -->
 <?php
cart();
 ?>

 <!-- Third child -->
<div class="bg-light">
<h3 class="text-center bg-dark">Hidden store</h3>
<p class="text-center">communication is at the heart of e-commerce and community</p>
</div>

<!-- Forth child -->
<div class="container">
    <div class="row">
        <form action="" method="post" >
        <table class="table table-bordered text-center">
           
                <!-- php code to display dynamic data -->
                 <?php
                 global $conn;
                 $get_ip_add = getIPAddress();
                 $total_price=0;
                 $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                 $result= mysqli_query($conn,$cart_query);
                 $result_count=mysqli_num_rows($result);
                 if($result_count>0){
                   echo" <thead>
                <tr>
                    <th>Product title</th>
                    <th>Product image</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                    <th>Remove</th>
                    <th colspan='2'>Opertaions</th>
                </tr>
            </thead>
            <tbody>";
                
                 while($row=mysqli_fetch_array( $result)){
                    $product_id=$row['product_id'];
                    $select_products="Select * from `products` where product_id='$product_id'";
                    $result_products= mysqli_query($conn,$select_products);
                    while($row_product_price=mysqli_fetch_array( $result_products)){
                       $product_price=array($row_product_price['product_price']);
                       $price_table=$row_product_price['product_price'];
                       $product_title=$row_product_price['product_title'];
                       $product_image1=$row_product_price['product_image1'];
                       $product_values=array_sum($product_price);
                       $total_price+=$product_values;
                        ?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img src="./admin_area/product_images/<?php echo $product_image1?>" 
                    alt="" class="cart_img"></td>
                    <td><input type="text" name="qty" class="form-control w-50"></td>
                    <?php
                    $get_ip_add = getIPAddress();
                    if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart="UPDATE `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                        $result_products_quantity= mysqli_query($conn,$update_cart);
                        $total_price=$total_price*$quantities;
                    }
                    ?>
                    <td><?php echo $price_table?>-TK</td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    <td>
                   <!-- <button class="bg-info px-3 py-2 border-0">Update</button> -->
                    <input type="submit" value="update cart" class="bg-info px-3 py-2 border-0" name="update_cart">
                    <!-- <button class="bg-info px-3 py-2 border-0">Remove</button> -->
                    <!-- <button class="bg-info px-3 py-2 border-0">Update</button> -->
                    <input type="submit" value="remove cart" class="bg-info px-3 py-2 border-0" name="remove_cart">
                </td>
                </tr>
                <?php
                 } } }
                else {
                    echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                }
                ?>
            </tbody>
        </table>
        <!-- subtotal -->
         <div class="d-flex">
         <?php
                 global $conn;
                 $get_ip_add = getIPAddress();
                 $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                 $result= mysqli_query($conn,$cart_query);
                 $result_count=mysqli_num_rows($result);
                 if($result_count>0){
                    echo"<h4 class='px-3'>Subtotal: <strong class='text-info'>$total_price-TK</strong></h4>
                     <input type='submit' value='Continue shopping' class='bg-info px-3 py-2 border-0' name='continue_shopping'>
                     <button class='bg-secondary p-3 py-2 border-0 text-light text-decoration-none'><a href='./users_area/checkout.php'>Checkout</a></button> ";
                 }
                 else{
                   echo "<input type='submit' value='Continue shopping' class='bg-info px-3 py-2 border-0' name='continue_shopping'>";
                 }
                 if(isset($_POST['continue_shopping'])){
                    echo"<script>window.open('index.php','_self')</script>";
                 }
                 ?>
           
    </div>
</div>
</div>
</form>
<!-- remove items from the cart -->
 <?php
 function remove_cart_item(){
    global $conn;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }

    }
 }
 echo $remove_item  = remove_cart_item();
 ?>

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