<html>

<head>
<title> Student DataBase Search</title>


</head>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
button 
{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 2%;
  border: none;
  cursor: pointer;
  width: 90%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.modal 
{
  
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
}
    </style>
<body>

<div  class="modal">
  <form class="modal-content" action="stud_db_show.php" method="post">  
      <div class="container">
        <h2>Search For Student Data</h2>
       
          <label ><b>  Which Faculty Student You Want To Search :</b></label>
          </br></br>
          Select From  Undergraduate Course :
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
            </select>  <br></br></br>
            <button  type="submit" name="search1">Search Record</button>
            </br>
            Select From Postgraduate Course :
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
          
         <br></br><br></br>
              
          <button  type="submit" name="search2">Search Record</button>
         
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <a href="http://localhost/chandu_php/demo_login.php"> <button type="button" onclick="document.getElementById('id01').style.display='none'"  class="cancelbtn">Back To Login</button></a>
        
        </div>
      </form>
  </div>
</body>
</html>
<?php 



?>