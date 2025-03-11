<?php
include('../includes/connect.php')
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products-Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3 w-50 m-auto">
        <h1 class="text-center">Insert products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
             <!--title-->
            <div class="form-outline mb-4 m-auto">
            <label for="Product_title" class="form-label">Product Title</label>
            <input type="text" name="Product_title" id="Product_title" class="form-control" 
            placeholder="Enter product title" autocomplete="off" required="required">
            </div>
             <!--description-->
             <div class="form-outline mb-4  m-auto">
            <label for="description" class="form-label"> product description</label>
            <input type="text" name="description" id="description" class="form-control" 
            placeholder="Enter product description" autocomplete="off" required="required">
            </div>
            
             <!-- keywords-->
             <div class="form-outline mb-4  m-auto">
            <label for="product_keywords" class="form-label"> keywords</label>
            <input type="text" name=" product_keywords" id=" product_keywords" class="form-control" 
            placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>
            <!-- categories-->
            <div class="form-outline mb-4 m-auto">
            <select name="product_categories" id="" class="product_category">
            <option value="">select a category</option>
            <?php
            $select_query="select * from `categories`";
            $result_query=mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
             <!-- <option value="">category1</option>
             <option value="">category2</option>
             <option value="">category3</option>
             <option value="">category4</option>
             <option value="">category5</option>
             <option value="">category6</option>
             <option value="">category7</option> -->
            </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 m-auto">
            <select name="product_brands" id="" class="product_brands">
            <option value="">select a brand</option>
            <?php
            $select_query="select * from `brands`";
            $result_query=mysqli_query($conn,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $brand_title=$row['brand_title'];
                $brand_id=$row['brand_id'];
                echo "<option value='$category_id'>$brand_title</option>";
            }
            ?>
             <!-- <option value="">brand1</option>
             <option value="">brand2</option>
             <option value="">brand3</option>
             <option value="">brand4</option>
             <option value="">brand5</option>
             <option value="">brand6</option>
             <option value="">brand7</option> -->
            </select>
            </div>
            <!-- Image 1-->
            <div class="form-outline mb-4 m-auto">
            <label for="product_image1" class="form-label">Product Image1</label>
            <input type="file" name=" product_image1" id=" product_image1" class="form-control" 
             required="required">
            </div>
            <!-- Image 2-->
            <div class="form-outline mb-4 m-auto">
            <label for="product_image2" class="form-label">Product Image2</label>
            <input type="file" name=" product_image2" id=" product_image2" class="form-control" 
             required="required">
            </div>
            <!-- Image 3-->
            <div class="form-outline mb-4 m-auto">
            <label for="product_image3" class="form-label">Product Image3</label>
            <input type="file" name=" product_image3" id=" product_image3" class="form-control" 
             required="required">
            </div>
            <!-- price-->
            <div class="form-outline mb-4  m-auto">
            <label for="product_price" class="form-label"> Product Price</label>
            <input type="text" name=" product_price" id=" product_price" class="form-control" 
            placeholder="Enter product price" autocomplete="off" required="required">
            </div>
            <!-- price-->
            <div class="form-outline mb-4  m-auto">
           <input type=" submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert products">
            </div>
        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script></script>
</html>