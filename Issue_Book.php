



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Web Developer Form</title>
    <link rel="stylesheet" href="">
    
   
<style>


  
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
  }
  
  * {
    box-sizing: border-box;
  }
  
  /* Add padding to containers */
  .container {
    padding: 16px;
    background-color: white;
  }
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for the submit button */
  .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  .registerbtn:hover {
    opacity: 1;
  }
  
  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }
  
  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
</style>
    
</head>
<body>

<?php include "nav.php" ?>


  <h1 align="center">Add New Books</h1>

 
  <form action="Issue_Request.php"  method="post" enctype="multipart/form-data">
   
    
    <div  class="container">
      
      <h1 align="center">Library Management System To Request Get Books</h1>
      
      <p align="center">Please fill in this Following  Details to  Library Management System.</p>
      <hr>

      

      <label for=""><b>user_id </b></label>
      <input type="text" placeholder="user_id" name="user_id" id="" required>

      <label for=""><b>Name </b></label><br><br>
      <input type="text" placeholder="Name" name="name" id="" >


    
  
      <label for=""><b>Book Name's</b></label><br><br>
      <input type="text" placeholder="Book Name" name="bname" id="" >
      <br><br>
      
      
      <label for="">Book ID'S</label>
      <input type="text" placeholder="Book ID" name="bid" id="" >
  
      <br><br>

      

      
  

     
     
      
      <hr>
      
  
      <button type="submit" value="Submit" class="registerbtn">Submit</button>
    </div>
    
    <div class="container signin">
      <p>Already  You are Request ? <a href="View_all_Issue_request_Details_user.php">View Details</a>.</p>
    </div>

  
  </form>

 
  

   
  <?php include "footer.php" ?>

</body>
</html>
