<?php
session_start();

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $con=new mysqli("localhost","root","Fast1234","bookstore");
    $stmt="Select idcustomer,email,password from customer";
    $result=$con->query($stmt);
    $stat=false;
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['email']==$email && $row['password']==$password)
            {
                $stat=true;
                $_SESSION['idcustomer']=$row['idcustomer'];
                header('location: homepage.php');
            }
        }
    }
    if($stat==false)
    {
        echo "<script>
        alert('Incorrect Credentials!');
                window.location.href='customerlogin.php';
                </script>";
        //header('location: customerlogin.php');
    }

}

?>