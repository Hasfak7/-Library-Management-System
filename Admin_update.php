
<?php

    include 'conn.php';

    $u_id = $_GET['u_id'];

    $sql = "SELECT * FROM user_accounts WHERE u_id = '$u_id'";

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

<center><h1>Update Information</h1><center>
    <br><br>
<form action="update_Accounts.php" method="post">
<table id="tab">
<td>ID : </td>
                <td><input type="text" name="u_id" value="<?php echo $row['u_id'] ?>"></td>
                
            </tr>

            <tr>
                <td>Name : </td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>

            <tr>
                <td>email: </td>
                <td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
            </tr>
            <tr>
                <td>password: </td>
                <td><input type="text" name="password" value="<?php echo $row['password'] ?>"></td>
            </tr>

          

            <tr>
        	<td>user type:</td>
           
            <td><select name="user_type" id="">
            <option value="<?php echo $row['user_type'] ?>" selected><?php echo $row['user_type'] ?></option>
                    <option value="admin">admin</option>
                    <option value="customer">customer</option>
                   
                </select></td>
        </tr>

        
       
        

        <tr>
            <td></td>
            <td>
        	<input type="submit" name="update" value="Update">
        	<input  type="reset" value="Reset">
            </td>
        </tr>

 


</table>
</form>
</body>
</html>


