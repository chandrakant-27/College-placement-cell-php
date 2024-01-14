<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
  
	<header>
		<div class="main">
		
		<ul align=right>
			<li><a href="demo__dashboard.php">HOME</a></li>
			<li><a href="demo_login.php">LOGIN</a></li>
			<li><a href="demo_signup.php">SIGN IN</a></li>
			<li><a href="about_us.html">ABOUT US</a></li>
			<li><a href="contactus.html">CONTACT</a></li>
    </ul>
    <div class="logo">
		<img src="msg_logo.png">
		</div>
		</div>

<div align=center class="title">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Student Login</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Other Login</button>
</div>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="" method="post">  
      <div class="container">
        <h2>Student Login Form</h2>
        <i class="fa fa-envelope icon"></i>
          <label for="email1"><b>  Email</b></label>
          <input type="email" placeholder="Enter Email" name="email1" required>
        
          
          <i class="fa fa-key icon"></i>
          <label for="psw1"><b>  Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw1" required>
              
          <button type="submit" name="submit1">Login</button>
          <label>
          <p> <a href="demo_signup.php" style="color:dodgerblue">Create New account </a></p>
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo__dashboard.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  class="cancelbtn">Cancel</button></a>
          <span class="psw"> <a href="password_check.php">Forgot password?</a></span>
        </div>
      </form>
  </div>

  <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">  
        

        <div class="container">
        <h2>Industrial  Login Form</h2>
        <i class="fa fa-envelope icon"></i>
          <label for="email2"><b>  Email</b></label>
          <input type="email" placeholder="Enter Email" name="email2" required>
        
          
          <i class="fa fa-key icon"></i>
          <label for="psw2"><b>  Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw2" required>
              
          <button type="submit"  name="submit2">Login</button>
          <label>
          <p> <a  href="demo_signup.php" style="color:dodgerblue">Create New account </a></p>
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo__dashboard.php">  <button type="button" onclick="document.getElementById('id02').style.display='none'"  class="cancelbtn">Cancel</button></a>
          <span class="psw"> <a href="password_check.php">Forgot password?</a></span>
        </div>
      </form>
  </div>
  </header>
  <script>
// Get the modals
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');



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
if(isset($_POST["submit1"]))
{
    $a=$_POST['email1'];
    $b=$_POST['psw1'];
    
    $con=mysqli_connect("localhost","root","","php_project");
    if($con==false)
    {
          echo"connection error";
    }
     else
    {
      
      $result=$con->query("SELECT `Email`, `Psw` FROM `register` WHERE Email='$a'");
      if($result)
      {
        if($result ->num_rows > 0)
        { 
          while($row=$result->fetch_assoc())
          {
            $e= $row['Email'];
            $p= $row['Psw'];

            if($a==$e)
            {
              if($b==$p)
              {
                header("location:./demo_student_details.php");
              }
              else
              {
                echo '<script>alert("Password Do Not Match....Please Try Again")</script>';

              }
              
            }
            else
            {
              echo '<script>alert("Email  Do Not Match....Please Try Again")</script>';

            }
          }
        }
      
        else
        {
          echo '<script>alert("No Record Found ....Please Register ")</script>';
        }
     
      
    }
    }
}
if(isset($_POST["submit2"]))
{
    $a=$_POST['email2'];
    $b=$_POST['psw2'];
    
    $con=mysqli_connect("localhost","root","","php_project");
    if($con==false)
    {
          echo"connection error";
    }
     else
    {
      
      $result=$con->query("SELECT `Email`, `Psw` FROM `register` WHERE Email='$a'");
      if($result)
      {
        if($result ->num_rows > 0)
        { 
          while($row=$result->fetch_assoc())
          {
            $e= $row['Email'];
            $p= $row['Psw'];

            if($a==$e && $b==$p)
            {
              header("location:./student_db_search.php");
            }
            else
            {
              echo '<script>alert("Email and Password Do Not Match....Please Try Again")</script>';

            }
          }
        }
      
        else
        {
          echo '<script>alert("No Record Found ....Please Register or Check Email and Password ")</script>';
        }
     
      
    }
    }
}


?>