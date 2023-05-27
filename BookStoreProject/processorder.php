<?php
session_start();
$count=0;

$con=new mysqli("localhost","root","Fast1234","bookstore");

if(isset($_POST['placeorder']))
{
    if(isset($_SESSION['idcustomer']))
    {
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }

        $idcustomer=$_SESSION['idcustomer'];

       
        $totalamount=0;
        foreach($_SESSION['cart'] as $key=>$value)
        {
            /*echo $_SESSION['idcustomer']."<br>";
            echo $value['name'];
            echo $value['price'];
            echo "  QTY: ".$value['qty'];*/
            $totalamount=$totalamount+($value['price']*$value['qty']);
        }
        //echo "<br>Amount: ".$totalamount;

        $stmt="select address from customer where idcustomer=".$_SESSION['idcustomer'];
            $result=$con->query($stmt);
            foreach($result as $row)
            {
                $address=$row['address'];
            }
            //echo "Address: ".$address;

        $stmt_order="insert into orderr(customerid,address,totalamount,totalqty,data) 
        values($idcustomer,'$address',$totalamount,$count,sysdate())";
        echo $stmt_order;
        $con->query($stmt_order);


        $stmtgetorderid="select idorder from orderr";
        $idorders=$con->query($stmtgetorderid);
        $idorder;
        foreach($idorders as $x)
        {
            $idorder=$x['idorder'];
        }
        echo "<br>Last inserted id: $idorder <br>";

        $x=$idorder;
        echo $x;
        
        foreach($_SESSION['cart'] as $key=>$value)
        {
            $stmthistory="insert into history(orderid,productid,qty,price) values($x,".$value['bookid'].",".$value['qty'].",".$value['price'].")";
            //echo "<br>$stmthistory";
            $con->query($stmthistory);
        }

        $_SESSION['totalamount']=$totalamount;
        $_SESSION['id']=$x;

        header('location: receipt.php');
    }
    else
    {
        header('location: customerlogin.php');
    }
}

?>
        
        
    