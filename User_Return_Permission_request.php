
<?php

    include 'conn.php';

    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM issue_return_book WHERE user_id = '$user_id'";

    $result = mysqli_query($conn, $sql);

    // print_r($result);

    $row = mysqli_fetch_assoc($result);
    
    // print_r($row);
   


   

?>

<!DOCTYPE html>
<html>
<head>
<style>
#tab {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<center><h1>Return Books  Requests</h1><center>
    <br><br>
<form action="Return_update_permission.php" method="post">
<table id="tab">


            



        <tr>
                <td>Return Book Date: </td>
                <td><input type="date" name="Return_book_date" value="<?php echo $row['Return_book_date'] ?>"></td>
            </tr>

           


           





           

          

           

        
       
        

        <tr>
            <td></td>
            <td>
        	<input type="submit" name="update" value="Provide Permission">
        	<input  type="reset" value="Reset">
            </td>
        </tr>

 


</table>
</form>
</body>
</html>


