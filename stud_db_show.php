<html>
<head>
<title>Student Database Show</title>
<style>
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
button:hover {
  opacity: 0.8;
}
.container {
  padding: 16px;
}
table,th{
    border:1px solid black;
    background-color:gray;
}
td{border:1px solid black;background-color:#f1f1f1; }
</style>
</head>
<body>
<div class="container" align=center style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/student_db_search.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  >Back To Search Page</button></a>
        
 </div>
 </br></br>
 </body>
 </html>
<?php
if(isset($_POST["search1"]))
{
    $a=$_POST['ug'];
    
    
    $con=mysqli_connect("localhost","root","","php_project");
    if($con==false)
    {
          echo"connection error";
    }
     else
    {
        
      $result=$con->query("SELECT * FROM `stud_info` WHERE UG_Course='$a'");
      
      
      if($result)
      {
        if($result ->num_rows > 0)
        { ?><table border=3>
        <tr><th>Name</th><th>Date Of Birth</th><th>Gender</th><th>Contact </th><th>Address</th><th>Email</th><th>HSC Percentage</th><th>Undergraduate Course</th><th>UG cgpa</th><th>Postgraduate Course</th><th>PG cgpa</th></tr>
        <?php

          while($row=$result->fetch_assoc())
          {
                echo "<tr><td>",$row["Name"],"</td><td>",$row["DOB"],"</td><td>",$row["Gender"],"</td><td>",$row["Mo_no"],"</td><td>",$row["Address"],"</td><td>",$row["Email"],"</td><td>",$row["HSC"],"</td><td>",$row["UG_Course"],"</td><td>",$row["UG_cgpa"],"</td><td>",$row["PG_Course"],"</td><td>",$row["PG_cgpa"],"</td></th>";
           
          }
          
         }
         else
        {
          echo '<script>alert("No Record Found ....")</script>';
        }
     
      
    }
    }
}
else
if(isset($_POST["search2"]))
{
    $b=$_POST['pg'];
    
    
    $con=mysqli_connect("localhost","root","","php_project");
    if($con==false)
    {
          echo"connection error";
    }
     else
    {
        
      $result=$con->query("SELECT * FROM `stud_info` WHERE PG_Course='$b'");
      
      
      if($result)
      {
        if($result ->num_rows > 0)
        { ?><table border=3>
        <tr><th>Name</th><th>Date Of Birth</th><th>Gender</th><th>Contact </th><th>Address</th><th>Email</th><th>HSC Percentage</th><th>Undergraduate Course</th><th>UG cgpa</th><th>Postgraduate Course</th><th>PG cgpa</th></tr>
        <?php

          while($row=$result->fetch_assoc())
          {
                echo "<tr><td>",$row["Name"],"</td><td>",$row["DOB"],"</td><td>",$row["Gender"],"</td><td>",$row["Mo_no"],"</td><td>",$row["Address"],"</td><td>",$row["Email"],"</td><td>",$row["HSC"],"</td><td>",$row["UG_Course"],"</td><td>",$row["UG_cgpa"],"</td><td>",$row["PG_Course"],"</td><td>",$row["PG_cgpa"],"</td></th>";
           
          }
          
         }
         else
        {
          echo '<script>alert("No Record Found ....")</script>';
        }
     
      
    }
    }
}

?>