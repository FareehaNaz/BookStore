<?php

require "navbar.php";
$con=new mysqli("localhost","root","Fast1234","bookstore");
$stmt= "Select * from orderr";
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
    <title>Products</title>
    <style>
      ::-webkit-scrollbar {
    width: 5px;
  }

  ::-webkit-scrollbar-thumb {
    background-color: gray;
  }
      body, th, td{
        color: white;
      }
    </style>
</head>
<body>

<center>
    <div style="width:30%;">
        <form class="d-flex ms-auto" action="details.php" method="post">
            <input type="text" class="form-control me-sm-2" placeholder="Enter OrderID" name="details" required>
            <button type="submit" class="btn btn-outline-light" name="search">Search</button>
         </form>
    </div>
</center>
<section class="h-100 h-custom">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
              <th scope="col" class="h5">OrderID</th>
                <th scope="col" class="h5">Address</th>
                <th scope="col" class="h5">Total</th>
                <th scope="col" class="h5">Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              
                if($result->num_rows>0)
                {
                    foreach($result as $row)
                    {   if($row['customerid']==$_SESSION['idcustomer']){
              ?>
            <tr>
            <td class="align-middle">
                    <p class="mb-3"><?php echo $row['idorder']?></p>
                </td>
                <td class="align-middle">
                    <p class="mb-3"><?php echo $row['address']?></p>
                </td>
                <td class="align-middle">
                    <p class="mb-3">$<?php echo $row['totalamount']?></p>
                </td>
                <td class="align-middle">
                <p class="mb-3"><?php echo $row['data']?></p>
                </td>
                <td class="align-middle"></td>
              </tr>
              <?php
                }}
                }
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