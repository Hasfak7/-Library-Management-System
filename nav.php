<?php 
    include 'conn.php';


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="District.css">
    
   <style> 


        /* Nawbar*/

        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}



@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}



footer {
	color:#7f7f7f;
	font-size:14px;
	overflow:hidden;
	padding:28px 40px;
	background:#000;
	margin:0 10px;
}
footer a {
	color:#fff;
}
.copyright {
	float:left;
}
.social-list {
	float:right;
}
.social-list li {
	float:left;
	margin:0 0 0 10px;
}
.social-list li a:hover img {
	opacity:0.8;
}
/* Calendar styles */


.fc {
	direction: ltr;
	text-align: left;
	padding:30px 0 0 0;
	position:relative;
}
.fc table {
	border-collapse: collapse;
	border-spacing: 0;
}
html .fc, .fc table {
	font-size: 1em;
}
.fc td, .fc th {
	padding: 0;
	vertical-align: top;
}




label{

font-size: larger;

text-align: justify;
}

.btn {
  margin: auto;
  width: 50%;
  padding: 10px;
  background-color: #41a512;
  color: #f2f2f2;
  font-size: medium;
}




</style>

    
</head>
<body>

  <ul>
    <li><a class="active" href="Home.html">Home</a></li>
    
    
    <li><a href="login_form.php"> login</a></li>
    <li><a href="register_form.php">register</a></li>

    <li><a href="logout.php" >logout</a></li>
  
  
    <li><a href="Book.php">Books</a></li>


    <li><a href="Book_Details.php"> Books Details</a></li>

    <li><a href="Issue_Book.php"> Requst To Issue Book </a></li>

    <li><a href="User_Return.php"> Return Books Request   </a></li>
    
    
    <li><a href="Check_issue_request.php">Check Check Issue Books Request</a></li>
    
    <li><a href="Payment.php"> Payment</a></li>
    <li><a href="contact-details.html">Contact Us</a></li>
  </ul>

  <br>  <br>


  <dv style="background-color: rgb(0, 129, 250) width: 150; height: 150px;" >
  
      

      <center><h1>HI! <span>user</span> WELCOME <span><?php echo $_SESSION['user_name'] ?></span>  LIBRARY MANAGEMENT SYSTEM </h1></center><br>
    <center><h3 style=" color:green;">Time is <span id='date-time'></span>.</h3></center>
    </dv>
    <br><br>   <br><br>   <br><br>
    <div style="border-color: green; background-color: hsl(199, 82%, 56%); height: 120px; width: 1655px;">
      
    <marquee style="font-size: x-large; color: #fdfdfd;" direction="right " class="runTest">
      <br> <br>
     Explore and Borrow Books.    Google can bring you back 100,000 answers, but a librarian can bring you back the right one.       A Library Is A Hospital For The Mind.     People can lose their lives in libraries, They ought to be warned.  we are always imagined that Paradise will be a kind of a Library.     
    </marquee>
    </div>

   
<br> 

<script> // Current Date nd Time
           var dt = new Date();
          document.getElementById('date-time').innerHTML=dt;</script>
</script>