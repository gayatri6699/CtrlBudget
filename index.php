<?php
session_start();
if(isset($_SESSION['mystatus']))
{
    if($_SESSION['mystatus']==1)
    {
        header('Location:home.php');
    }
}



?>









<html>
<head>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


<link href="forms.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">
<style>
nav{
	
	padding:20px;
	background:#303030;
	background:rgba(0,0,0,1);
	color:white;
	width:100%;
	
}
.logo
{
	
	float:left;
}
ul{
	margin-right:10%;
	float:right;
	
	
}

ul li
{font-size:1.2em;
	float:left;margin-left:20px;color:white;
}
.clearfix:before,.clearfix:after{
	content:"";
	display:block;
	
}
.clearfix:after{clear:both;}
body{overflow:hidden;}
	a{color:white;text-decoration:none;}
a:hover{color:skyblue;text-decoration:none;}
.login{
margin:30% auto;
padding:30px;

background:#303030;
background:rgba(0,0,0,.5);	
}
#signform{display:none;}
	</style>
	<script>
	
$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});
	</script>
	<script>
	$(document).ready(function(){
		
		$("#signbut").click(function(){
			
			$("#signform").fadeIn();
			$("#logform").fadeOut();
		});
		$("#logbut").click(function(){
			$("#logform").fadeIn();
			$("#signform").fadeOut();
		});
	});
	</script>
	<link rel="stylesheet" href="assets/css/animate.css">
</head>

<body  STYLE="background: url(img/bg1.jpeg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	
	
<nav class="clearfix">
<div class="logo" style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l <span style="color:white;font-size:0.5em;font-weight:900;">Budget</span></div>
       </div>  
<ul style="list-style-type: none; position: absolute;top:20px;left:830px;float: right;  padding:30px;">
<li ><a href="index.php">Home</a></li>
<li ><a href="about.php">About</a></li>
<li><a href="index1.php" id="logbut">Sign-in</a></li>
<!--<li><a href="#" id="signbut">Signup</a></li>-->
<li><a href="team.php" id="signbut">Team</a></li>


</ul>


</nav>

<img  style="position: absolute;top: 280px;left:600px;" src="img/box.gif"/>
		<script src="assets/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              
</body>
</html>