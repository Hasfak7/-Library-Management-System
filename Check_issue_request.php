<?php include "nav.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Issue Books Request</title>
    <style>

       



label{

font-size: larger;

text-align: justify;
}

.btn {
margin: auto;
width: 5%;
padding: 4px;
background-color: #41a512;
color: #f2f2f2;
font-size: medium;
}

    </style>
</head>
<body>
   
       


       

  <h1 style="text-align:center;">Check Issue Books Request</h1>

  <br><br><br><br><br>

        <form method="post">
          
              
                  <center> <label for="">User id</label>
                  <input type="text" name="user_id" id="">
                    <input type="submit" class="btn" value="check" name="check">
                </center>
            
        </form>

        


 
        <?php
        if(isset($_POST['check']))
        {
            
           

            $user_id = $_POST['user_id'];

            $sql = "SELECT * FROM issue_return_book WHERE user_id = '$user_id'";

            $resut = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($resut);

            if ($resut -> num_rows>0)
            {
                ?>
                <table align="center" border=5 style="border-collapse:collapse; width:90%; text-align:center; margin-top:100px; padding:50px" font-size: 17px;  >
                    <tr>
                     <th>User id</th>
                            <th>Name </th>
                            <th> Book Name</th>
                            <th>Book id</th>
                            <th>Issue_book_date</th>
                            <th>Issue_Request </th>
                            <th>payment_status</th>
                            
                            

                    </tr>
                    <tr style="font-size: 17px;">
                    <td> <?php echo $row['user_id']?> </td>
                    <td> <?php echo $row['name']?> </td>
                    <td> <?php echo $row['bname']?> </td>
                    <td> <?php echo $row['bid']?> </td>
                    <td> <?php echo $row['Issue_book_date']?> </td>
                    <td> <?php echo $row['Issue_Request']?> </td>
                    <td> <?php echo $row['payment_status']?> </td>
                    
                   
                  
                    </tr>
                </table>

                <?php
            }

            else 
            {
                echo "<br><br> <h3 style='color:red'><center>No information</center></h3>";
            }
        }

        ?>
  

   

<br><br><br><br><br>




<?php include "footer.php" ?>
</body>


</html>