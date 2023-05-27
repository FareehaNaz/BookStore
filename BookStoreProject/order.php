<?php
session_start();
$count=0;

if(isset($_POST['placeorder']))
{
    if(isset($_SESSION['idcustomer']))
    {
        $conn=new mysqli("localhost","root","Fast1234","bookstore");
        $result=$conn->query("select * from orderr");

        if($result->num_rows>0)
        {
            while($row= $result->fetch_assoc())
            {
                echo $row['idorder'];
            }
        }

    }
    else
    {
        header('location: customerlogin.php');
    }
}




?>