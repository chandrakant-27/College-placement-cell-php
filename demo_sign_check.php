<!DOCTYPE html>
<html>

<head>
<title>Data Insertion </title>
<style>
button 
{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25 %;
}
button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
</style>
</head>
<body>
<div class="container" align=center style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo__dashboard.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  >Back To Home Page</button></a>
        
 </div>
 </br>
 <div class="container" align=center style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo_signup.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  >Back To Sign-Up Page</button></a>
        
 </div>
 </br>
 <div class="container" align=center style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo_login.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  >Back To Login Page</button></a>
        
 </div>
 </body>
</html>
<?php
      
   if(isset($_POST['submit3']))
   {
       $a=$_POST['nm1'];
       $b=$_POST['email3'];
       $c=$_POST['psw3'];
       $d=$_POST['psw-repeat'];
       

       if($c==$d)
       {
           $con=mysqli_connect("localhost","root","","php_project");
           if($con==false)
           {
               echo"connection error";
           }
           else
           {
               echo '<script>alert("Sign In  Succefull")</script>';
               $t=mysqli_query($con,"INSERT INTO `register`(`Name`, `Email`, `Psw`) VALUES ('$a','$b','$c')");
              if($t==1)
              {
                header("location:./demo_login.php");
              }
              echo $t;
               


           }

           
       }
       else
       {
       
           echo '<script>alert( "Passwords Do NOT Match")</script>';
           
          // header("location:./demo_signup.php");  
       }
   }
   else
   if(isset($_POST['register']))
   {
       $a=$_POST['NAME'];
       $b=$_POST['DOB'];
       $c=$_POST['gender'];
       $d=$_POST['phone'];
       $e=$_POST['address'];
       $f=$_POST['email1'];
       $g=$_POST['hsc'];
       $h=$_POST['ug'];
       $i=$_POST['ug_cgpa'];
       $j=$_POST['pg'];
       $k=$_POST['pg_cgpa'];

      $con=mysqli_connect("localhost","root","","php_project");
     if($con==false)
      {
         echo"connection error";
     }
     else
    {
        
        $t=mysqli_query($con,"INSERT INTO `stud_info`(`Name`, `DOB`, `Gender`, `Mo_no`, `Address`, `Email`, `HSC`, `UG_Course`, `UG_cgpa`, `PG_Course`, `PG_cgpa`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')");
        if($t==1)
        {
          echo '<script>alert("Registration Succefull")</script>';

        }



  }

           
       
   }
        
  

?>
