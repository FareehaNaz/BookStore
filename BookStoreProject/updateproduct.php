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
    <title>Update</title>

    <style>
        @media (min-width: 1025px) {
        .h-custom {
        height: 100vh !important;
        }
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
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
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
                <form action="abc.php" method="post" enctype="multipart/form-data">
                <th scope="row">
                <img src="<?php echo $row['image'] ?>" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                  <div class="d-flex align-items-center">
                  <input class="mb-3" type="file" name="image" accept="image/JPG,image/PNG">
                  </div>
                </th>
                <th class="align-middle" >
                <div class="flex-column ms-4">
                      <input class="mb-3" type="text" value="<?php echo $row['name']?>" name="name">
                    </div>
                </th>
                <td class="align-middle">
                <input class="mb-3" type="text" value="<?php echo $row['author']?>" name="author">
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
                    <input class="mb-3" type="number" value="<?php echo $row['quantity']?>" name="quantity" min='1'>

                    <button class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                $<input class="mb-3" type="number" value="<?php echo $row['price'] ?>" name="price" min='1'>
                </td>
                <td class="align-middle">
                <button class="btn btn-dark btn-block" name="update" type="submit">Edit</button>
                </td>
                <input type="hidden" name="bookid" value="<?php echo $row['bookid'] ?>">
                    </form>
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
