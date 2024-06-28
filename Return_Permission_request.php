
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
<td>user_id : </td>
                <td><input type="text" name="user_id" value="<?php echo $row['user_id'] ?>"></td>
                
            </tr>

            <tr>
                <td>Name : </td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>

            <tr>
                <td>Book names: </td>
                <td><input type="text" name="bname" value="<?php echo $row['bname'] ?>"></td>
            </tr>
            <tr>
                <td>Bid's: </td>
                <td><input type="text" name="bid" value="<?php echo $row['bid'] ?>"></td>
            </tr>


            <tr>
                <td>Issue Book Date: </td>
                <td><input type="date" name="Issue_book_date" value="<?php echo $row['Issue_book_date'] ?>"></td>
            </tr>

            
            

                <tr>
                <td>Payment Status: </td>
                <td><input type="text" name="payment_status" value="<?php echo $row['payment_status'] ?>"></td>
            </tr>

        




        <tr>
                <td>Return Book Date: </td>
                <td><input type="date" name="Return_book_date" value="<?php echo $row['Return_book_date'] ?>"></td>
            </tr>

            <tr>
                <td> Fine Amount Status: </td>
                <td><input type="text" name="fine_amount" value="<?php echo $row['fine_amount'] ?>"></td>
            </tr>


            <tr>
        	<td>Return Request:</td>
           
        <td><select name="Return_Request" id="">
            <option value="<?php echo $row['Return_Request'] ?>" selected><?php echo $row['Return_Request'] ?></option>
                    <option value="Permission Granted">Permission Granted</option>
                    <option value="Not Permission Granted">Not Permission Granted</option>
                   
                </select></td>

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


