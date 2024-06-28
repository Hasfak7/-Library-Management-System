<?php

    include 'conn.php';

    $u_id = $_GET['u_id'];

    $sql ="DELETE FROM user_accounts WHERE u_id = '$u_id'";

    if(mysqli_query($conn,$sql))
    {
        ?>
            <script>
                alert("Record Deleted");
                window.location.href="index.php";
            </script>
        <?php
    }

?>