<?php

    if(isset($_POST['update']))
    {
        include 'conn.php';

        $u_id = $_POST['u_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
     

        $sql = "UPDATE user_accounts SET 
        name='$name',email='$email',password='$password',user_type='$user_type' WHERE u_id ='$u_id'";

        if(mysqli_query($conn,$sql)){
            echo "Update Successfully";
            header('location:View_all_account_details.php');
        }else{
            echo "error in updating".$sql.mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    
    else
    {
        header('location:View_all_account_details.php');
    }

?>