<?php
session_start();
//session_destroy();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['addtocart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'bookid');
            if(in_array($_POST['bookid'],$myitems))
            {
                echo "<script>
                alert('Item already added to cart.');
                window.location.href='homepage.php';
                </script>";
            }
            else
            {
                $count= count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'bookid'=>$_POST['bookid'],'qty'=>1);
                //print_r($_SESSION['cart']);
                echo "<script>
                window.location.href='homepage.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price'],'bookid'=>$_POST['bookid'],'qty'=>1);
            echo "<script>
                window.location.href='homepage.php';
                </script>";
        }
    }

    // if(isset($_POST['updateQuantity'])) {
    //     if(isset($_SESSION['cart'])) {
    //         $myitems = array_column($_SESSION['cart'],'bookid');
    //         if(in_array($_POST['bookid'],$myitems))
    //         {
    //             $count= count($_SESSION['cart']);
    //             $_SESSION['cart'][$count]=array('name'=>$_POST['name'], 'price'=>$_POST['price'],'bookid'=>$_POST['bookid'],'qty'=>$_POST['qty']);
    //         }
    //     }
    // }
    if(isset($_POST['updateQty'])) {
        if(isset($_SESSION['cart'])) {
           foreach($_SESSION['cart'] as $key => $value){
                if($value['bookid'] == $_POST['bookid'] && $value['name'] == $_POST['name']){
                    $_SESSION['cart'][$key]['qty'] = $_POST['qty'];
                    $_SESSION['cart'][$key]['price'] = $_POST['price']; 
                }
            } 
            echo "<script>
                window.location.href='cart.php';
                </script>";
        }
    }

    if(isset($_POST['removeitem']))
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['bookid']==$_POST['bookid'] && $value['name']==$_POST['name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                window.location.href='cart.php';
                </script>";
            }
        }

    }
}
?>