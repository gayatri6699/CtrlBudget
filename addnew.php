<html>
<!-- checking whether user login or not -->
<?php
session_start();  
if(!isset($_SESSION['user']) && !isset($_SESSION['uid']))
{
  header('Location:index.php');   
}



?>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="forms.css" rel="stylesheet">
<style>

nav{
	display:block;
	padding:10px;
	background:white;

	color:gray;
	width:100%;
	box-shadow:0px 0px 8px #303030;
	
}

ul li
{font-size:1em;
margin-top:8px;
	float:left;margin-left:20px;color:white;
}
	a{color:black;text-decoration:none;}
a:hover{color:skyblue;text-decoration:none;}
</style>
</head>
<body>
<!--tittle-->
<nav class="clearfix">
<div class="logo"style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l <span style="color:gray;font-size:0.5em;font-weight:900;">Budget</span></div>
       </div>
	<!--menu-->   
<ul>
<li><a href="home.php"><i class="fa fa-home"></i> &nbsp Home</a></li>
<li><a href="about.php"><i class="fa fa-info"></i> &nbsp About</a></li>
<li><a href="addplan.php"><i class="fa fa-plus"></i> &nbsp Add New</a></li>

<li><a href="logout.php" ><i class="fa fa-sign-out"></i> &nbsp Logout</a></li>


</ul>
</nav>
</body>
</html>