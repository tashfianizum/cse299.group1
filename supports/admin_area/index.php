<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.php">
    <link rel="stylesheet" href="login.php">
    <style>
        .admin_img {
      width: 100px;
      object-fit: contain;
    }
    </style>
</head>
<body>
<div class="container_fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container_fluid">
        <img src="../logo/logo.png" alt="" class="logo">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar_nav">
                <li class="nav_items">
                    <a href="index.php" class="nav_link">welcome guest</a>

                </li>
            </ul>
        </nav>
        </div>
    </nav>
    <div class="bg-light">
        <h3 class="text-center p-2">Manage details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center justify-content-center">
            <div class="px-5">
                <a href="#"> <img src="../logo/f1.png" alt=""class="admin_img"></a>
                <p class="text-light text-center">Tashfia</p>
            </div>
            <div class="button text-center">
                
            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"> view Products</a></button>
           <button class="my-3"><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1"> Insert Categories</a></button>
           <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">view Categories</a></button>
            <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">view Brands</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">list users</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <?php
    if(isset($_GET['insert_categories'])){
        include 'insert_categories.php';
    } 
    if(isset($_GET['insert_brand'])){
        include 'insert_brand.php';
    } 
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script></script>
</body>