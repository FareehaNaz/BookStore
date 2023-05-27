
<?php
if(isset($_POST['add']))
{
    $con=new mysqli("localhost","root","Fast1234","bookstore");
    $bookname=$_POST['bookname'];
    $description=$_POST['description'];
    $author=$_POST['author'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];

    if(isset($_FILES['image']) && $_FILES['image']['error']== UPLOAD_ERR_OK)
    {
        //$filename=basename($_FILES['image']['name']);
        $filetype=$_FILES['image']['type'];
        $filesize=$_FILES['image']['size'];
        $tmpfile=$_FILES['image']['tmp_name'];
        $filename=$bookname.$author;
        

        $allowed_types= array('image/jpeg','image/jpg','image/png');
        if(in_array($filetype,$allowed_types))
        {
            $target_folder="bookimages/";
            if($filetype=='image/jpeg')
            {
                $store_as= $filename.".jpeg";
                $target_file=$target_folder.$store_as;
                //move_uploaded_file($tmpfile,$target_file);
                
            }
            if($filetype=='image/jpg')
            {
                $store_as= $filename.".jpg";
                $target_file=$target_folder.$store_as;
                //move_uploaded_file($tmpfile,$target_file);
            }
            if($filetype=='image/png')
            {
                $store_as= $filename.".png";
                $target_file=$target_folder.$store_as;
                //move_uploaded_file($tmpfile, $target_file);
            }
            move_uploaded_file($tmpfile,$target_file);
            $insert_stmt= "insert into product(name,description,image,author,quantity,price) 
                    values('".$bookname."','".$description."','".$target_file."','".$author."',".$quantity.",".$price.")";
            $con->query($insert_stmt);
                    //echo $insert_stmt;
        }
        else
        {
            echo "Incorrect file type.";
        }

    }

    header('location: addnewproduct.php');
}

?>