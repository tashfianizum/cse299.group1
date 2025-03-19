
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>New User Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
    
    
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row alighn-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- user name field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" 
                        required="required" name="user_username">
                    </div>
                    <!-- email field -->
                    <div class="form-outline  mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" 
                        placeholder="Enter your email" autocomplete="off" 
                        required="required" name="user_email">
                    </div>
                    <!-- image field -->
                    <div class="form-outline  mb-4">
                        <label for="user_image" class="form-label">Image</label>
                        <input type="file" id="user_image" class="form-control"  
                        required="required" name="user_image">
                    </div>
                    <!-- password field -->
                    <div class="form-outline  mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password " class="form-control"
                         placeholder="Enter your password " autocomplete="off" 
                        required="required" name="user_password">
                    </div>
                    <!-- confirm user password field -->
                    <div class="form-outline  mb-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password " class="form-control"
                         placeholder="Confirm password" autocomplete="off" 
                        required="required" name="conf_user_password">
                    </div>
                    <!-- Address field -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" 
                        placeholder="Enter your address" autocomplete="off" 
                        required="required" name="user_address">
                    </div>
                    <!-- Contact field -->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" 
                        placeholder="Enter your mobile number" autocomplete="off" 
                        required="required" name="user_contact">
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register"
                         class="bg-info py-2 px-3 border=0" name="user_register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an accout?
                        <a href="user_login.php" class="text-danger">  Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- php code -->
 <?php
 if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();
    //select query
    $select_query="select * from `user_table` where username=' $user_username' or user_email='$user_email'";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows( $result);
    if($rows_count>0){
        echo "<script>alert('Username and email already exists')</script>";
    }elseif($user_password!=$conf_user_password){
        echo "<script>alert('your entired password do not match')</script>";//checking password=confirm pass

    }
    else{
        //insert query
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query="insert into `user_table`(username,user_email,user_password,user_image,user_ip,user_address,user_mobile)
      values('$user_username','$user_email','$user_password','$user_image','$user_ip','$user_address','$user_contact')";
      $sql_execute=mysqli_query($conn,$insert_query);
      if($sql_execute){
        echo "<script>alert('Data inserted successfully')</script>";
      }
      else die("Connection failed: " . mysqli_connect_error());
    }

    }
    
 ?>
