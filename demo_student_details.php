<!DOCTYPE html>  
<html>  
<head>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body {font-family: Arial, Helvetica, sans-serif;}
 {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],textarea {
  width: 98%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email] {
  width: 98%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus ,textarea:focus
{
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
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
.container {
  padding: 16px;
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

  

 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn,.register {  
  background-color: #4CAF50;  
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
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>  
</head>  
<body>  


<div id="id01" class="modal">

<form class="modal-content" action="demo_sign_check.php" method="post">  
  <div class="container"> 
  
  <center>  <h1><b> Student Registration Form</b></h1> </center>  
 
  <center><b><marquee><p style="color:blue" >Please fill in this form to Register Here.</p></marquee></b></center>
  <hr>
  <i class="fa fa-user icon"></i>
 <label><b> Name :</b></label>   
<input type="text" name="NAME" placeholder= "Enter Your Name"  required /> 
<br></br>
<label><b> Date Of Birth  :</b></label>   
<input type="date" name="DOB"  required />  
<br></br>  
<div>  
<label>   <b>
Gender :  
</b></label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  

</div>  
<br></br>
<label><b>
<i class="fa fa-phone  icon"></i>
Phone :  
</b></label>  
 
<input type="text" name="phone" placeholder="Enter Your Contact No." size="10" required>   
<label> <b>  
Current Address : 
</b></label>  
  
<textarea  name="address" placeholder="Enter Your Current Address" value="address" required>  
</textarea> 
<i class="fa fa-envelope icon"></i>
<label for="email1"><b>  Email :</b></label>
<input type="email" placeholder="Enter Your Email" name="email1" required>
<br></br>
 <b><p><h3>Qualification Information</h3></p></b>       
 <br></br>
 <label ><b>HSC Percentage :</b></label>
 <input type="text" name="hsc" placeholder="Enter HSC Percentage "  >   
 
 <div>  
<label>   <b>
Undergraduate  Course  :  
</b></label>   
</br>
Select Your Undergraduate Course
<select name="ug"> <b>
<option >BCA</option>  
<option >BBA</option>  
<option >B.Tech</option>  
<option >BA</option>  
<option >BCOM</option> 
<option >BSC</option> 
<option >BCS</option> 
<option >BE(Mechanical)</option> 
<option >BE(Civil)</option> 
<option >BE(Computer)</option>  
<option >BA LLB</option>
<option >MBBS</option>
<option >B.PHARMA</option>
<option >D.PHARMA</option><option >Diploma in Computer</option><option >Diploma in Mechanical</option><option >Diploma in Civil</option><option >Diploma in Electrical</option>  </b>
</select>  <br></br>
<label ><b>Last Year CGPA :</b></label>
 <input type="text" name="ug_cgpa" placeholder="Enter Your Undergraduate CGPA "  >   
</div>  </br>


<div>  
<label>   <b>
Postgraduate  Course  :  
</b></label>    
</br>
Select Your Postgraduate Course
<select name="pg"> <b>
<option >MCA</option>  
<option >MCS</option>  
<option >M.Tech</option>  
<option >MA</option>  
<option >MCOM</option> 
<option >MSC</option> 
<option >MBA</option> 
<option >None</option>
</select>
<br></br>
<label ><b>Last Year CGPA :</b></label>
 <input type="text" name="pg_cgpa" placeholder="Enter Your Postgraduate  CGPA "  >   
</div>  </br>
<div class="clearfix">
        <button type="submit" class="registerbtn" name="register">Register</button>
        <a href="http://localhost/chandu_php/demo__dashboard.php"> <button type="button"  class="cancelbtn">Cancel</button></a>
      </div>
</form>  
</body>  
</html> 
<?php

?>