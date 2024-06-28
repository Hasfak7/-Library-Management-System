<?php

    include 'conn.php';

    $Nic_No = $_POST['Nic_No'];
    $Name = $_POST['Name'];
    $Address= $_POST['Address'];
    $User_Name= $_POST['User_Name'];
    $Contact_Number= $_POST['Contact_Number'];
    $Email= $_POST['Email'];
    $Password= $_POST['Password'];
  
    
   
    

    $sql = "INSERT INTO customer(Nic_No, Name, Address,User_Name,Contact_Number,Email ,Password) VALUES ('$Nic_No', '$Name',' $Address', ' $User_Name', '$Contact_Number', '$Email', '$Password')";
    
    if (mysqli_query($conn, $sql))
    {
        ?>
        <script>
            alert("Customer Register Successfully  ");
            window.location.href="Login.html";
        </script>
        <?php
       
    }

    else
    {
        echo "Error ".mysqli_error($conn);
    }
?>