<?php
$count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}
$con= new mysqli("localhost","root","Fast1234","bookstore");

$stmt= "Select bookid, name, description, image, author, quantity, price from product";
$result= $con->query($stmt);

require "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
    
</head>
<body>
        
        <center>
<div style="width: 60%; height: 483px; margin-top: 20px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="container " style="margin-top: 0px; justify-content: end;">
        <h2 style="color:white"> Connect With Us</h2>
    </div>

    <div style="display: flex; flex-direction: row; justify-content: center; align-items: cen;">
            <div class="container" style="background-color: 
            whitesmoke; width:400px ; height:340px; justify-content: left; display: flex; 
            flex-direction: column;">
                <div style="margin-top: 7px;">
                    <h4>Send Your Request</h4>
                </div>

                <div class="container" style="display: flex;flex-direction: row; justify-content: center; align-items: center;">
                    <div>
                        <form width="80px">
                            <label>Name</label>
                            <input type="text" placeholder="name" width="80px"><br>
                            <label>Email</label>
                            <input type="email" placeholder="Email"><br>
                        </form>
                    </div>

                    <div>
                        <form>
                            <label>Phone</label>
                            <input type="number" placeholder="Number"><br>
                            <label>Subject</label>
                            <input type="text" placeholder="Subject"><br>
                        </form>
                    </div>
                </div>

                <div>
                    <label>Messege</label>
                    <form>
                        <textarea name="textarea" id="t1" cols="48" rows="5" placeholder="Your 
                        Massege"></textarea>
                        <button class="btn btn-sm btn-dark btn-block">Send</button>
                    </form>
                </div>
            </div>
                <div class="container" style="color: aliceblue; 
                background-color: black; width:249px; height:340px ; display: flex; flex-direction: column; justify-content: left; ">
                <div style="margin-top: 7px;">
                <h4>Reach US</h4>
                </div>

                <div class="container" style="color: aliceblue; width:235px; height: 300px; 
                display: flex; flex-direction: row; justify-content: center;">
                    <div style="padding: 10px 10px;">
                        <form>
                            <label>Email</label>
                            <label>Phone</label>
                            <label><br>Address</label>
                        </form>
                    </div>
                    <div style="padding: 10px 10px; " >
                        <form>
                            <label>abc@email.com</label>
                            <label>+92-123-4567899</label>
                            <label>Fast Nuces</label>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
</center>
</body>
</html>