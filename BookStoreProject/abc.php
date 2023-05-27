<?php
$con=new mysqli("localhost","root","Fast1234","bookstore");
$stmt= "Select bookid, name, description, image, author, quantity, price from product";
$result= $con->query($stmt);

if(isset($_POST)=='update')
{
    if(isset($_POST)=='update')
    {
        if(isset($_POST['name']))
        {
            $update_stmt= "update product set name='".$_POST['name']."' where bookid=".$_POST['bookid'];
            $con->query($update_stmt);
        }
        if(isset($_POST['author']))
        {
            $update_stmt= "update product set author='".$_POST['author']."' where bookid=".$_POST['bookid'];
            $con->query($update_stmt);
        }
        if(isset($_POST['quantity']))
        {
            $update_stmt= "update product set quantity='".$_POST['quantity']."' where bookid=".$_POST['bookid'];
            $con->query($update_stmt);
        }
        if(isset($_POST['price']))
        {
            $update_stmt= "update product set price='".$_POST['price']."' where bookid=".$_POST['bookid'];
            $con->query($update_stmt);
        }
        if(isset($_FILES['image']) || $_FILES['image']['error']== UPLOAD_ERR_OK)
        {
            $bookname=$_POST['name'];
            $author=$_POST['author'];
            $filetype=$_FILES['image']['type'];
            $tmpfile=$_FILES['image']['tmp_name'];
            $filename=$bookname.$author;
            //echo "Filename is: ".$filename;
                
            while($row= $result->fetch_assoc())
            {
                if($_POST['bookid']==$row['bookid'] && file_exists($row['image'])) 
                {
                    echo "<br><br>deleting file".$row['image']."<br>";
                    unlink($row['image']);
                }
            }
                echo "<br><br>$filetype<br><br>";
            $allowed_types=array('image/jpeg','image/jpg','image/png');
            if(in_array($filetype,$allowed_types))
            {
                $target_folder="bookimages/";
                if($filetype=='image/jpeg')
                {
                    $store_as= $filename.".jpeg";
                    $target_file=$target_folder.$store_as;
                    echo "<br><br>$target_file<br><br>";                    
                }
                if($filetype=='image/jpg')
                {
                    $store_as= $filename.".jpg";
                    $target_file=$target_folder.$store_as;
                    echo "<br><br>$target_file<br><br>";
                }
                if($filetype=='image/png')
                {
                    $store_as= $filename.".png";
                    $target_file=$target_folder.$store_as;
                    echo "<br><br>$target_file<br><br>";
                }
                    move_uploaded_file($tmpfile,$target_file);
                    $update_stmt= "update product set image='".$target_file."' where bookid=".$_POST['bookid'];
                    $con->query($update_stmt);
                    echo $update_stmt;
                }
            else
            {
                echo "<script>
                alert('Incorrect type');
                window.location.href='updateproduct.php';
                </script>";
            }

        }
        
        header('location: updateproduct.php');
    
    }


}

?>