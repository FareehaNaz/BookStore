
<?php
if(isset($_POST['delete']))
{
    $con=new mysqli("localhost","root","Fast1234","bookstore");

    //echo $_POST['bookid'];

    $stmt= "delete from product where bookid=".$_POST['bookid'];
    //echo $stmt;
    $con->query($stmt);
   

    header('location: deleteproduct.php');
}

?>