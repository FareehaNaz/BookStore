<?php
session_start();

if(isset($_POST)=='Login')
{
    header('location: customerlogin.php');
}


?>