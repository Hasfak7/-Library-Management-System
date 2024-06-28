<?php

    include 'conn.php';

    $user_id  = $_GET['user_id '];

    $sql ="DELETE FROM issue_book WHERE user_id  = '$user_id'";

    if(mysqli_query($conn,$sql))
    {
        ?>
            <script>
                alert("Record Deleted");
                window.location.href="View_all_Issue_request_Details.php";
            </script>
        <?php
    }

?>