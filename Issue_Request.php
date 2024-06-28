<?php

    include 'conn.php';

    $user_id  = $_POST['user_id'];
    $name = $_POST['name'];
    $bname= $_POST['bname'];
   
    $bid= $_POST['bid'];
   
    $Issue_book_date= $_POST['Issue_book_date'];

    $Issue_Request= $_POST['Issue_Request'];
    $payment_status= $_POST['payment_status'];
    $Return_book_date= $_POST['Return_book_date'];
    $fine_amount= $_POST['fine_amount'];
    $Return_Request= $_POST['Return_Request'];

    
    
    

    $sql = "INSERT INTO issue_return_book (user_id,name,bname,bid,Issue_book_date,Issue_Request,payment_status,Return_book_date,fine_amount,Return_Request) VALUES ('$user_id', '$name','$bname','$bid', '$issue_book_date', '$Issue_Request','$bid','$bid','$bid','$bid')";
    
    if (mysqli_query($conn, $sql))
    {
        ?>
        <script>
            alert(" Issue Book Request  Successfully Send  ");
            window.location.href="Issue_Book.php";
        </script>
        <?php
       
    }

    else
    {
        echo "Error ".mysqli_error($conn);
    }
?>