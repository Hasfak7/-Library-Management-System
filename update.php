<?php
// including the database connection file
include_once("config.php");

?>
<?php



//getting id from url
$ids=$_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user_accounts WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
	$password = $res['password'];
    $user_type = $res['user_type'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="editprocess.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
		<tr> 
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $password;?>"></td>
			</tr>

            <tr>
				<td>user_type</td>
				<td><input type="text" name="user_type" value="<?php echo $user_type;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>