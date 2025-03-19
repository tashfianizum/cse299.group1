<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
    
    
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center"> User Login</h2>
        <div class="row alighn-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- user name field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" 
                        required="required" name="user_username">
                    </div>
                    
                    
                    <!-- password field -->
                    <div class="form-outline  mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password " class="form-control"
                         placeholder="Enter your password " autocomplete="off" 
                        required="required" name="user_password">
                    </div>
                    <!-- confirm user password field
                    <div class="form-outline  mb-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password " id="conf_user_password " class="form-control"
                         placeholder="Confirm password" autocomplete="off" 
                        required="required" name="conf_user_password">
                    </div> -->
                    <!-- Address field
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" 
                        placeholder="Enter your address" autocomplete="off" 
                        required="required" name="user_address">
                    </div>
                     Contact field 
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" 
                        placeholder="Enter your mobile number" autocomplete="off" 
                        required="required" name="user_contact">
                    </div> -->
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border=0" name="user_login">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an accout?
                        <a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>