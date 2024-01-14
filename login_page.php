<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=email]:focus,input[type=password]:focus 
{
  background-color: #ddd;
  outline: none;
}
button 
{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar 
{
  width: 40%;
  border-radius: 50%;
}
input[type=email] {
  width: 100%;
  padding: 15px;
  
  display: inline-block;
  background: #f1f1f1;
  padding: 15px ;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
} 
.modal 
{
  display: none; /* Hidden by default */
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

.modal1 {
  display: none; /* Hidden by default */
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
.modal1-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
}
</style>
</head>
<body>
<div align=center>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Student Login</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Other Login</button>
</div>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" >  
      <div class="container">
        <h2>Student Login Form</h2>
        <i class="fa fa-envelope icon"></i>
          <label for="e_mail"><b>  Email</b></label>
          <input type="email" placeholder="Enter Email" name="email1" required>
        
          
          <i class="fa fa-key icon"></i>
          <label for="psw"><b>  Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw1" required>
              
          <button type="submit">Login</button>
          <label>
          <p> <a href="#" style="color:dodgerblue">Create New account </a></p>
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
  </div>

  <div id="id02" class="modal1">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">  
        

        <div class="container">
        <h2>Industrial  Login Form</h2>
        <i class="fa fa-envelope icon"></i>
          <label for="e_mail"><b>  Email</b></label>
          <input type="email" placeholder="Enter Email" name="email2" required>
        
          
          <i class="fa fa-key icon"></i>
          <label for="psw2"><b>  Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw2" required>
              
          <button type="submit">Login</button>
          <label>
          <p> <a href="#" style="color:dodgerblue">Create New account </a></p>
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
  </div>
  <script>
// Get the modals
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');



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

?>