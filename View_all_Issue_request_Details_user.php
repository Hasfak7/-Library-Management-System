
<?php include "Admin_Header.php" ?>

<br><br><br><br><br><br>

    <?php

 

  $sql= "SELECT * FROM issue_return_book";
echo"<h1><center> Issue Book Permission Requests</center></h1>";
  $result = $conn->query($sql);
 
  echo "<table border=1 style=' border-collapse: collapse; width: 100%'><tr style='background-color:#353a40; color:white; '>
  <th>User Id</th><th>Name</th><th>Book Name's</th><th>Book ID's</th><th>Issue book date</th><th>Issue Request</th></tr>";

  if ($result->num_rows > 0) {
      
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          ?>
         
          
                  <tr><td><?php echo $row['user_id']?></td>
                  <td><?php echo $row["name"]?></td>
                  <td><?php echo $row["bname"]?></td>
                  <td><?php echo $row["bid"]?></td>
                 
                  <td><?php echo $row["Issue_book_date"]?></td>
                  <td><?php echo $row["Issue_Request"]?></td>
                  



                  
          <?php
      }
      echo "</table>";
  } 



?>

<br><br><br><br><br><br>

<br><br><br><br><br><br>



<?php include "footer.php" ?>