<?php
//echo $_SESSION['idcustomer'];
$count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}

require "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cart</title>
    <style>
        table, th, td{
            color:white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-dark my-5">
            <h1 style="color:white;">MY CART</h1>
        </div>
   

    <div class="col-lg-9">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                if(isset($_SESSION['cart']))
                {   $x=0;
                    foreach($_SESSION['cart'] as $key=>$value)
                    {
                        $x++;
                        echo "
                        <tr>
                        <td>$x</td>
                        <td>$value[name]</td>
                        <td>$ $value[price]<input type='hidden' class='iprice' value='$value[price]'</td>
                        <td><input class='text-center iquantity' onchange='subtotal()' type='number' value='$value[qty]' min=1></td>
                        <td class='itotal'></td>
                        <td>
                        <form action='addtocart.php' method='POST'>
                        <button name='removeitem' class='btn btn-sm btn-outline-danger' style='border: 2px solid red;color:white;'>REMOVE</button>
                        
                        </td>
                        <input type='hidden' name='bookid' value='$value[bookid]'>
                        <input type='hidden' name='name' value='$value[name]'>
                        
                        </form>
                        </td>
                        </tr>
                        ";
                    }
                }

                ?>
                
            </tbody>

        </table>

    </div>

        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h4>Total Amount</h4>
                <h5 class="text-right" id="totalamount"></h5><br>
                <form action="processorder.php" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cod" checked>
                        <label class="form-check-label" for="cod">Cash On Delivery</label>
                    </div><br>
                    <button class="btn btn-dark btn-block" name="placeorder">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

var z=0;
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var totalamount=document.getElementById('totalamount');
let cart

function subtotal()
{
    z=0;
    for(i=0; i<iprice.length;i++)
    {
        itotal[i].innerHTML="$ "+(iprice[i].value)*(iquantity[i].value);
        z=z+(iprice[i].value)*(iquantity[i].value);
    }
    totalamount.innerHTML="$" +z;
}

subtotal();
</script>
    
</body>
</html>
