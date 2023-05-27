<?php

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

    $con=new mysqli("localhost","root","Fast1234","bookstore");

    $stmt="insert into customer(name,email,password,address,contact) 
    values('$name','$email','$password','$address','$contact')";

    $con->query($stmt);
    header('location: customerlogin.php');
}

?>