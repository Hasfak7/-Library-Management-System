
<?php include "Admin_Header.php" ?>

<br><br><br><br><br><br>

    <?php

 

  $sql= "SELECT * FROM user_accounts";

  $result = $conn->query($sql);

  echo "<table border=1 style=' border-collapse: collapse; width: 100%'><tr style='background-color:#353a40; color:white; '>
  <th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>User Type</th><th>Admin Operations</th></tr>";

  if ($result->num_rows > 0) {
      
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          ?>
         
          
                  <tr><td><?php echo $row['u_id']?></td>
                  <td><?php echo $row["name"]?></td>
                  <td><?php echo $row["email"]?></td>
                  <td><?php echo $row["password"]?></td>
                  <td><?php echo $row["user_type"]?></td>
               
                  <td><a href="Admin_delete.php?u_id=<?php echo $row["u_id"];?>">Delete</a>           
                                           <a href="Admin_update.php?u_id=<?php echo $row["u_id"];?>" id="edit">Update</a></td></tr>
          <?php
      }
      echo "</table>";
  } 



?>

<br><br><br><br><br><br>

<br><br><br><br><br><br>



<?php include "footer.php" ?>