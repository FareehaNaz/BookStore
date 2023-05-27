<?php
require "navbar.php";
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
    <title>Just One More Chapter</title>
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



<div class="card-group" style="margin-left: 50px">
    <?php
    foreach($result as $row)
    {
    ?>
    <form action="addtocart.php" method="post">
    <div class="m-4">
    <div class="card shadow p-2 mb-5 bg-white rounded" style="width: 300px;">
    <img src="<?php echo $row['image'] ?>" style=" height: 400px;" class="card-img-top" alt="Sample Image">
        <div class="card-body text-center">
            <h5 class="card-title"><b><?php echo $row['name']  ?></b></h5>
            <p class="card-text">$<?php echo $row['price']  ?></p>
            <button class="btn btn-dark btn-block" name="addtocart" type="submit">Add To Cart</button>
        </div>
    </div>
</div>
<input type="hidden" name="bookid" value="<?php echo $row['bookid']  ?>">
<input type="hidden" name="name" value="<?php echo $row['name']  ?>">
<input type="hidden" name="price" value="<?php echo $row['price']  ?>">
    </form>
<?php
    }
    ?>
</div>

    
</body>
</html>