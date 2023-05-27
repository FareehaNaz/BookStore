<?php
//session_destroy();
$count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}
$con= new mysqli("localhost","root","Fast1234","bookstore");

$stmt= "Select bookid, name, description, image, author, quantity, price from product";
$result= $con->query($stmt);

require "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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


        <center>
            <h1 style="color:white;">
                Project By:
            </h1>
            <h3 style="color:white;">
                20k-1609 | Areeba Asad<br>
                20k-1732 | Fareeha Naz
            </h3>
        </center>
    
</body>
</html>