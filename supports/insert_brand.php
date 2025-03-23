<?php
include('../includes/connect.php');

if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand-title'];
    
    // Sanitizing input to prevent SQL injection
    $category_title = mysqli_real_escape_string($conn, $brand_title);

    // Select query
    $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select);
    
    // Check if category exists
    if ($number > 0) {
        echo "<script>alert('The brands is already present in the database');</script>";
    } else {
        // Insert query
        $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($conn, $insert_query);

        if ($result) {
            echo "<script>alert('Brands has been inserted successfully');</script>";
        }
    }
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-file-import"></i></span>
  <input type="text" class="form-control" name="brand-title" placeholder="Insert brands" aria-label="Categoris" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_brand" value="insert brands" 
  aria-label="Username" aria-describedby="basic-addon1">
  
</div>
</form>