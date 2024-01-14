<html>

	<style>
		
		*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../1.jpg) ;
	height: 100vh;
	background-size: cover;
	background-position: center;
}
.background{
	background-color:#191919;
	height: 100vh;
	background-size: cover;
	background-position: center;
}


}
ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
	
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: white;
	color: black;
}
.logo img{
			float: left;
			margin-left:15px;
			margin-right: 150px;
			width: 150px;
			height: auto;
		}
.logo1 img{
			
			margin-left:2%;
			margin-top:2%;
			margin-right:2%;
			margin-bottom:2%;
			max-width: 1200px;
		margin: auto;
		}	
.main{
		max-width: 1200px;
		margin: auto;
		z-index:1;
}

.title{
	position: absolute;
	top: 40%;
	left: 55%;
	transform: translate(-50%,-50%);
}
.title h1,h5,h6{
	color: #fff;
	
}

.button{
	position: absolute;
	top: 65%;
	left: 47%;
	transform: translate(-50%,-50%);
}
.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color:white;
	color: black;
}
	</style>

<head>
	<title> Home_page</title>
	
	</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
			<img src="msg_logo.png">
			</div>
				<ul align=right>
					<li><a href="">HOME</a></li>
					<li><a href="demo_login.php">LOGIN</a></li>
					<li><a href="demo_signup.php">SIGN IN</a></li>
					<li><a href="about_us.html">ABOUT US</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
		</div>
		<div class="logo1">
		<img src="msg.jpg"  alt="img1"  >
		</div>
		<div class="title" align=center>
            <h5>Mahatma Gandhi Vidyamandir's</h5>
            <h1 style=color:red;>M.S.G. Arts,Science & Commerce College </h1>
            <h5>Malegaon Camp,Dist:Nashik</h5>
            <b><h1 style=color:blue;>Placement Cell</h1></b>
            
		</div>
		
	</header>
</body>
</html>
<?php

?>