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
<!DOCTYPE html>
<html>
<head>
	
<link href="styles.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link href="assets/css/font-awesome.min.css" rel="stylesheet">


	<link rel="stylesheet" href="assets/css/sty.css">
	<link href="assets/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<style >nav{
	
	padding:20px;
	background:#303030;
	background:rgba(0,0,0,1);
	color:white;
	width:100%;
	
}
body{
	overflow:hidden;
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
</style>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	</script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
		
</head>
<body>
<nav class="clearfix">
<div class="logo" style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l <span style="color:white;font-size:0.5em;font-weight:900;">Budget</span></div>
       </div>  
<ul style="list-style-type: none; position: absolute;top:20px;left:830px;float: right;  padding:30px;">
<li ><a href="index.php">Home</a></li>
<li ><a href="about.php">About</a></li>
<li><a href="index1.php" id="logbut">Sign-in</a></li>
<!--<li><a href="#" id="signbut" style="text-decoration: none;">Signup</a>-->
<li><a href="team.php" id="logbut">Team</a></li>
</li>


</ul>


</nav>
	<h1 style="çolor:white;text-align: center;">Login Here </h1>
	<div class="w3layouts" style="position: absolute;top:180px;left: 430px;">
		<div class="signin-agile">
			<h2>Sign In</h2>
			<form action="login.php" method="post" id="logform">
				<input type="text" name="user" class="name" placeholder="Username" required="">
				<input type="password" name="pass" class="password" placeholder="Password" required="">
				<ul>
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
				</ul>
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<input type="submit" value="Login">
			</form>
		</div>
		
		<div class="clear"></div>
	</div>
	
	
<body>
</html>