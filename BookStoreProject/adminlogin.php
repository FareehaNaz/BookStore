<?php
session_start();
session_destroy();
$count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}
$con= new mysqli("localhost","root","Fast1234","bookstore");

$stmt= "Select bookid, name, description, image, author, quantity, price from product";
$result= $con->query($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-4 col-xl-5">
        <img src="bookimages\cover.jpg" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="adminlogincheck.php" method='post'>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h1 style="color: white;">Sign up</h1>
            
          </div>

          <div class="divider d-flex align-items-center my-4">
            
          </div>

          <!-- ID input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid ID" name="id"/>
            <label class="form-label" for="form3Example3" style="color: white;">ID</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password"/>
            <label class="form-label" for="form3Example4" style="color: white;">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>
 
</section>
</body>
</html>