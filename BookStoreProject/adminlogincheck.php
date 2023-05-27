<?php
if(isset($_POST['login']))
{
    $con=new mysqli("localhost","root","Fast1234","bookstore");
    $stmt="Select idadmin, password from admin";
    $result= $con->query($stmt);

    $stat=false;
    while($row= $result->fetch_assoc())
    {
        if($_POST['id']==$row['idadmin'] && $_POST['password']==$row['password'])
        {
            $stat==true;
            header('location: adminhomepage.php');
        }
    }
    if($stat==false)
    {
            echo "
            <script>alert('incorrect email/password');
            window.location.href='adminlogincheck.html';</script>
            ";
        }

    
}


?>