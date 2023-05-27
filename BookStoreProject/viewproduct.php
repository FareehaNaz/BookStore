<?php

$con=new mysqli("localhost","root","Fast1234","bookstore");
$stmt= "Select bookid, name, description, image, author, quantity, price from product";
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

<section class="h-100 h-custom">
  <div class="container h-100 py-5">
  <a class="btn btn-dark btn-block" href="adminhomepage.php">Go Back</a>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Products</th>
                <th scope="col" class="h5">Description</th>
                <th scope="col" class="h5">Author</th>
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
                    {   
              ?>
            <tr>
                <th scope="row">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo $row['image'] ?>" class="img-fluid rounded-3"
                        style="width: 120px;" alt="Book">
                        <div class="flex-column ms-4">
                        <p class="mb-2"><?php echo $row['name']?></p>
                        </div>
                    </div>
                </th>
                <td class="align-middle">
                    <p class="mb-3"><?php echo $row['description']?></p>
                </td>
                <td class="align-middle">
                    <p class="mb-3"><?php echo $row['author']?></p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
                    <p class="mb-3"><?php echo $row['quantity']?></p>
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                <p class="mb-3">$<?php echo $row['price']?></p>
                </td>
                <td class="align-middle"></td>
              </tr>
              <?php
                }
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