<?php
session_start();
$con=new mysqli("localhost","root","Fast1234","bookstore");
//Select o.customerid, p.name, h.qty, h.price from bookstore.history h, bookstore.product p, bookstore.orderr o where orderid=6 AND h.productid=p.bookid AND o.idorder=h.orderid;
$stmt= "Select o.customerid, p.name, h.qty, h.price from history h, product p, orderr o where orderid=".$_POST['details']." AND h.productid=p.bookid AND o.idorder=h.orderid";
$result= $con->query($stmt);

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
    <title>Add Product</title>
    <style>
      body, th, td{
        color: white;
      }
    </style>
</head>
<body>




<section class="h-100 h-custom">
  <div class="container h-100 py-5">
  <a class="btn btn-dark btn-block" href="history.php">Go Back</a>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Book Name</th>
                <th scope="col" class="h5">Quantity</th>
                <th scope="col" class="h5">Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              
                if($result->num_rows>0)
                {
                    foreach($result as $row)
                    {   if($_SESSION['idcustomer']==$row['customerid']){
              ?>
            <tr>
            <td class="align-middle">
                <p class="mb-3"><?php echo $row['name']?></p>
                </td>
                <td class="align-middle">
                <p class="mb-3"><?php echo $row['qty']?></p>
                </td>
                <td class="align-middle">
                <p class="mb-3">$<?php echo $row['price']?></p>
                </td>
                <td class="align-middle"></td>
              </tr>
              <?php
                }else{echo "<script>
                    alert('Incorrect OrderID.');
                    window.location.href='history.php';
                    </script>";}}
                }else{echo "<script>
                    alert('Incorrect OrderID.');
                    window.location.href='history.php';
                    </script>";}
              ?>
            
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</section>
    
    
</body>
</html>
