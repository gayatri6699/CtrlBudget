<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>Ctrl.co.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<style>
.logo
{
	
	float:left;
}
ul{
	margin-right:10%;
	float:right;
	
	
}


.clearfix:before,.clearfix:after{
	content:"";
	display:block;
	
}
.clearfix:after{clear:both;}

nav{
	dsiplay:block;
	padding:10px;
	background:white;

	color:gray;
	width:100%;
	box-shadow:0px 0px 8px #303030;
	
}

ul#top>li#kk
{font-size:1em;
margin-top:8px;
	float:left;margin-left:20px;color:white;
}
	a{color:black;text-decoration:none;}
a:hover{color:skyblue;text-decoration:none;}
body{overflow-X:hidden;}
</style>
</head>

<body style="color:black;">

 <?php 
 @session_start();
 if(isset($_SESSION['user']) && isset($_SESSION['uid']))
 {
	 include('topmenu.php');
 }
 else
 {
	 include('beforemenu.php'); 
 }
 ?>

      <center><h1 class="centered">ABOUT US</h1></center><br>
<HR>
<div class="container">
<div class="row ">
<div class="col-md-6 ">

  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/0_1.jpg" alt="Chania" >
      </div>

      <div class="item">
        <img src="img/1.jpg" alt="Chania" >
      </div>
    
      <div class="item">
        <img src="img/1_1.jpg" alt="Flower" >
      </div>

      <div class="item">
        <img src="img/1_3.jpg" alt="Flower" >
      </div> <div class="item">
        <img src="img/1_4.jpg" alt="Flower" >
      </div><div class="item">
        <img src="img/1_5.jpg" alt="Flower" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
 <div class="col-md-6">
 <h3>Contact</h3><br>
 <span style="float:left;"><b>Ph.No: </b>+91 9010614125 </span><br><span style=""><b>Mail Id. </b>vandrangisai@gmail.com</span>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3202.7593887400194!2d83.38613114999913!3d17.80717041086401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1440841603268" height="200px" width="550px"frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
</div>
<div class="col-md-6" style="color:black;line-height:25px;">



      
        <h3>Summary</h3>
		<p> Budget control is the biggest financial issue in the present world .One should look after their budget control to get ride off from their financial crisis .</p>
       
        <h3>Who we are</h3>
        <p> Young Techno crats came up with an idea of solving budget and time issues which we usually face in our daily lives .We are here to provide a budget controller according to your aspects</p>
        <h3>Why choose us?</h3>
        <p> Predominent way to control and manage the budget estimations with ease of accessing on multiple users,<br><br>
		<b>Our Features</b>
		<ul class="list-group">
		<li class="list-group-item">When Initial Budget is Known we can provide monitization for your plan</li>
		<li class="list-group-item">When Initial Budget is not Known You can control your budget.</li>
		<li class="list-group-item">Auto Group generator</li>
		<li class="list-group-item">You can  post your Bills ,Photos Files Etc., in your groups</li>
		<li class="list-group-item">Statistics of your previous budget plans</li>
		</ul>
		</p>
      
  
 
 </div>
 </div>
 </div>
<footer style="background:#303030;color:white;padding:10px;">
<div class="span12 row">
    <div class="copyright">Copyright &copy; 2016 All RIghts Reserved . Designed and Developed by <a href="#" rel="nofollow">WebApps Team</a></div>
  </div>
</footer>
<!-- Javascript --> 
<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.countdown.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>
