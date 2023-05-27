<?php
session_start();

if(isset($_POST)=='Logout')
{
    unset($_SESSION['idcustomer']);
    header('location: homepage.php');
}

?>