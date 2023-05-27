<?php
session_start();
$count=0;
if(isset($_SESSION['cart']))
{
    //$count=count($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $item) {
        $count += $item['qty'];
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            background-color: #112b3cee;
        }
        #navv{
            background-color: black;
        }
    </style>
</head>
<body>

<div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navv">
                <div class="container-fluid">
                    <a href="homepage.php" class="navbar-brand">Just One More Chapter</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse1">
                        <div class="navbar-nav">
                            <a href="about.php" class="nav-item nav-link" style="padding-left: 250px;">About Us</a>
                            <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                            <?php
                            if(isset($_SESSION['idcustomer'])){?>
                            <a href="history.php" class="nav-item nav-link">Order History</a>
                           <?php }?>
                        </div>
                        <div class="d-flex ms-auto">
                            <div class="cart" style="margin-left: 250px;">
                                <a href="cart.php"><i class="bi bi-cart3"></i></a>
                                 <div class="cartAmount"><?php echo $count ?></div>
                             </div>
                        </div>
                        <form class="d-flex ms-auto" action="searchpage.php" method="post">
                            <input type="text" class="form-control me-sm-2" placeholder="Bookname/Author" name="searchtext" required>
                            <button type="submit" class="btn btn-outline-light" name="search">Search</button>
                        </form>
                        <?php

                            if(isset($_SESSION['idcustomer'])){?>
                            <form class="d-flex ms-auto" action="bbb.php" method="post">
                            <button type='submit' class='btn btn-outline-light' name='Logout' value="Logout">Logout</button>
                            </form>
                           <?php }else{?>
                            <form class="d-flex ms-auto" action="aaa.php" method="post">
                            <button type='submit' class='btn btn-outline-light' name='Login' value="Login">Login</button>
                            </form>

                          <?php }
                        ?>
                    </div>
                </div>
            </nav>
</div>
    
</body>
</html>