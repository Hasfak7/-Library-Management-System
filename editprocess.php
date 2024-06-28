<?php
    include 'conn.php';
if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);

$email = mysqli_real_escape_string($mysqli, $_POST['email']);	

$password = mysqli_real_escape_string($mysqli, $_POST['password']);
$user_type = mysqli_real_escape_string($mysqli, $_POST['user_type']);

if(empty($name) || empty($email) || empty($password)|| empty($user_type)) {	
if(empty($name)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">email field is empty.</font><br>';
}
if(empty($password)) {
echo '<font color="red">password field is empty.</font><br>';
}	
if(empty($user_type)) {
    echo '<font color="red">user_type field is empty.</font><br>';
    }	
} else {	
$result = mysqli_query($mysqli, "UPDATE user_accounts SET name='$name',email='$email',password='$password',user_type='$user_type' WHERE id=$id");
header("Location: admin_page.php");
}
}
?>