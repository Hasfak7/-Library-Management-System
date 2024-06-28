<?php

    if(isset($_POST['update']))
    {
        include 'conn.php';

        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $bname = $_POST['bname'];
        $bid = $_POST['bid'];
        
        $Issue_book_date = $_POST['Issue_book_date'];
        $Issue_Request = $_POST['Issue_Request'];
        $payment_status = $_POST['payment_status'];

        $Return_book_date = $_POST['Return_book_date'];
        $fine_amount = $_POST['fine_amount'];
        $Return_Request = $_POST['Return_Request'];

        $sql = "UPDATE issue_return_book SET 
        name='$name',bname='$bname',bid='$bid',Issue_book_date='$Issue_book_date',Issue_Request='$Issue_Request',payment_status='$payment_status',Return_book_date='$Return_book_date',fine_amount='$fine_amount',Return_Request='$Return_Request' WHERE user_id ='$user_id'";

        if(mysqli_query($conn,$sql)){
            echo "Provide Request Successfully Successfully";
            header('location:View_all_Return_request_Details.php');
        }else{
            echo "error in updating".$sql.mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    
    else
    {
        header('location:View_all_Return_request_Details.php');
    }

?>