<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
/* Add padding to container elements */
.container {
  padding: 5px;
}

/* The Modal (background) */
.modal {
  /*display: none;*/ /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

  
/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}



/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style> 
<body>


 

<div id="id01" class="modal">
 
  <form class="modal-content"  method="POST">
    <div class="container">
      <h1 align=center>Password Check</h1>
      <p>Please fill following information to Check Your Password.</p>
      <hr>
     
      <i class="fa fa-user icon"></i>
      <label for="name"><b>Enter Your Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="nm1" required>
      <i class="fa fa-envelope icon"></i>
      <label for="email3"><b>Email</b></label>
      
      <input type="email" placeholder="Enter Email" name="email3" required>
      </hr>
   
        <button type="submit" class="signupbtn" name="submit4">Check Password</button>
     
        <a href="http://localhost/chandu_php/demo_login.php">  <button type="button" onclick=""  class="cancelbtn">Back To Login</button></a>

    </div>
  </form>
  
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
<?php

     
if(isset($_POST['submit4']))
{
    $a=$_POST['nm1'];
    $b=$_POST['email3'];

        $con=mysqli_connect("localhost","root","","php_project");
        if($con==false)
        {
             echo '<script>alert("Connection Error")</script>';
        }
        else
        {
          $result=$con->query("SELECT `Psw` FROM `register` WHERE Name='$a' and Email='$b'");
          if($result)
          {
            if($result ->num_rows > 0)
            { 
              while($row=$result->fetch_assoc())
              {
                
                $p= $row['Psw'];
               
                ?>
               '<script>alert("Your Password is : <?php echo $p; ?>"  )</script>';
                <?php
              }
                
           }
            else
          {
          
              echo '<script>alert( "No Record Found...")</script>';
              
            //  header("location:./demo_signup.php");  
          }
          }
        }
      }
 ?>