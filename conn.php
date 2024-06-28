<?php
    

    
    $serverName = "localhost";
     $userName = "root";
     $password = "";
     $dbName = "library_management_system";
 
     $conn = mysqli_connect($serverName, $userName, $password, $dbName);
 
     if(!$conn)
     {
         die("Connection Error ". mysqli_connect_error());
     }
?>