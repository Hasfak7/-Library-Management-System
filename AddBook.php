<?php

    include 'conn.php';

    $bid  = $_POST['bid '];
    $bname = $_POST['bname'];
    $bAuthor= $_POST['bAuthor'];
   
    $bPubl= $_POST['bPubl'];
    $bPDate= $_POST['bPDate'];
    $bPrice= $_POST['bPrice'];
    $bQuantity= $_POST['bQuantity'];
    

    $image =$_FILES['image']['tmp_name'];
//$name =$_FILES['name'];
$image =file_get_contents($image);
$image =base64_encode($image);
    
    
    

    $sql = "INSERT INTO book(bid, bname,bAuthor,Image,bPubl,bPDate,bPrice,bQuantity) VALUES ('$bid', '$bname',' $bAuthor', '$image', '$bPubl', '$bPDate', '$bPrice', '$bQuantity')";
    
    if (mysqli_query($conn, $sql))
    {
        ?>
        <script>
            alert("New Book Insert   Successfully  ");
            window.location.href="Book.php";
        </script>
        <?php
       
    }

    else
    {
        echo "Error ".mysqli_error($conn);
    }
?>