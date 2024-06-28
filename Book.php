



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Library Management System</title>
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
<script>
   
   
   function validate() {
   
      if( document.myForm.bname.value == "" ) {
         alert( "Please Enter Book name!" );
         document.myForm.bname.focus() ;
         return false;
      }

      if( document.myForm.bAuthor.value == "" ) {
         alert( ""Please Enter Book  Author!" );
         document.myForm.bAuthor.focus() ;
         return false;
      }
      if( document.myForm.image.value == "" ) {
         alert( "Please Upload Book  Photo " );
         document.myForm.image.focus() ;
         return false;
      }

      if( document.myForm.bPubl.value == "" ) {
         alert( ""Please Enter Book  Publish!" );
         document.myForm.bPubl.focus() ;
         return false;
      }
      if( document.myForm.bPDate.value == "" ) {
         alert( "Please Enter Book Publish Date!" );
         document.myForm.bPDate.focus() ;
         return false;
      }

      if( document.myForm.bPrice.value == "" ) {
         alert( "Please Enter Book Price!" );
         document.myForm.bPrice.focus() ;
         return false;
      }

      if( document.myForm.bQuantity.value == "" ) {
         alert( "Please Enter Your Book Quantity!" );
         document.myForm.bQuantity.focus() ;
         return false;
      }

     

      return( true );
   }

</script>
</head>
<body>

<?php include "Admin_Header.php" ?>


  <h1 align="center">Add New Books</h1>

 
  <form action="AddBook.php"  method="post" enctype="multipart/form-data" name ="myForm" onsubmit = "return(validate());">
   
    
    <div  class="container">
      
      <h1 align="center">Library Management System To Add New Books</h1>
      
      <p align="center">Please fill in this Following  Details to  Library Management System.</p>
      <hr>

      

      <label for=""><b>Book Name </b></label>
      <input type="text" placeholder="Book Name" name="bname" id="" required>

      <label for=""><b>Book Author </b></label><br><br>
      <input type="text" placeholder="Name" name="bAuthor" id="" required>


    
  
      <label for=""><b>Image</b></label><br><br>
      <input type="file" placeholder="Image" name="image" id="" required >
      <br><br>
      
      
      <label for="">Book Publish</label>
      <input type="text" placeholder="Book Publish" name="bPubl" id="" required >
  
      <label for="">Book Publish Date</label><br><br>
      <input type="Date" placeholder="Book Publish Date" name="bPDate" id="" required >
      <br><br>

      <label for="">Book Price</label>
      <input type="text" placeholder="Book Price" name="bPrice" id=""  required>
  <br>  <br>
      <label for="">Book Quantity</label><br><br>
      <input type="text" placeholder="Book Quantity" name="bQuantity" id=""  required>
      
  

     
     
      
      <hr>
      
  
      <button type="submit" value="Submit" class="registerbtn">Submit</button>
    </div>
    
    <div class="container signin">
      <p>Already  You are Submit ? <a href="Member_Details.php">View Details</a>.</p>
    </div>

  
  </form>

 
  

   
  <?php include "footer.php" ?>

</body>
</html>
