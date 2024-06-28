<!DOCTYPE html>
<html>
<head>
<style>
#Members {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#Members td, #Members th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Members tr:nth-child(even){background-color: #f2f2f2;}

#Members tr:hover {background-color: #ddd;}

#Members th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<?php include "nav_Common.php" ?>

<center><h1>Books Details</h1></center>


  <div style="width:80%; margin:auto; margin-top:50px">
    <?php
        include 'conn.php';

        $sql = "SELECT * FROM book";

        $result = mysqli_query($conn, $sql);

        if($result ->num_rows > 0)
        {
            ?>

                <form >

            <table id="Members" border=5 style="text-align:center;font-size: 19px;">
                    <tr >
                        <th >Book Name</th>
                        <th>Image </th>
                        
                        
                        <th>Book Author  </th>
                        <th>Book Publish</th>
                      

                        <th>Book Publish Date</th>
                        <th>Book Price</th>
                        <th>Book Quantity</th>
                        
                    </tr>
                
            <?php
            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                <td> <?php echo $row['bname']?> </td>
                <td><br> <br><br><br><br> <?php echo "<img src='data:image;base64,{$row['Image']}' alt='img' width='150px' height='250px'>"?></td>
                <td> <?php echo $row['bAuthor']?> </td>
                <td> <?php echo $row['bPubl']?> </td>
                <td> <?php echo $row['bPDate']?> </td>
                <td> <?php echo $row['bPrice']?> </td>
                <td> <?php echo $row['bQuantity']?> </td>
              
                
               
                </tr>
                <?php
            }
        }

        else
        {
            echo "Not in any Book";
        }

    ?>
    </table>

    </form>
    <br> <br><br><br><br><br>
    <?php include "footer.php" ?>
</body>
</html>