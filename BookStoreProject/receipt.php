<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
     body{
            background-color: #112b3cee;
        }
        #navv{
            background-color: black;
        }
@media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }
    
    .horizontal-timeline .items {
    border-top: 2px solid #112b3cee;
    }
    
    .horizontal-timeline .items .items-list {
    position: relative;
    margin-right: 0;
    }
    
    .horizontal-timeline .items .items-list:before {
    content: "";
    position: absolute;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background-color: #112b3cee;
    top: 0;
    margin-top: -5px;
    }
    
    .horizontal-timeline .items .items-list {
    padding-top: 15px;
    }
</style>

</head>
<body>
    <section class="h-100 h-custom">
        <div class="container py-5 h-10">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card border-top border-bottom border-3" style="border-color: #112b3cee !important;">
                <div class="card-body p-5">
      
                  <h2><p class="lead fw-bold mb-5" style="color: #112b3cee;">Purchase Reciept</p></h2>
      
                  <div class="row">
                    <div class="col mb-3">
                      <p class="medium text-muted mb-1">Date</p>
                      <p><?php echo date('Y-m-d') ?></p>
                    </div>
                    <div class="col mb-3">
                      <p class="medium text-muted mb-1">Order No.</p>
                      <p><?php echo $_SESSION['id'] ?></p>
                    </div>
                  </div>
      
                  <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                  <div class="row">
                        <div class="col-md-8 col-lg-7">
                        <p><b>Book Name</b></p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <p><b>Qty</b></p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <p><b>Price</b></p>
                        </div>
                        </div>
                    <?php 
                    foreach($_SESSION['cart'] as $key=>$value)
                    {?>
                        <div class="row">
                        <div class="col-md-8 col-lg-7">
                        <p><?php echo $value['name'] ?></p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <p><?php echo $value['qty'] ?></p>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <p>$<?php echo $value['price']*$value['qty'] ?></p>
                        </div>
                        </div>
                    <?php
                }
                ?>
                  </div>
      
                  <div class="row my-4">
                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                      <p class="lead fw-bold mb-0" style="color: #112b3cee;">Total $<?php echo $_SESSION['totalamount']?></p>
                    </div>
                  </div>
      
      
                  <p class="mt-4 pt-2 mb-0">Want any help? <a href="contactus.php" style="color: #112b3cee;">Please contact
                      us</a></p><br>

                      <center>
                      <form action="end.php" method="post">
                        <button type="submit" class="btn btn-dark btn-block">Home</button>
                      </form>
                      </center>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
</body>
</html>