<!DOCTYPE html>
<html class="full" lang="en">
<head>
<meta charset="utf-8">
<title>Ctrl.co.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="CTRL - Budget,Control Your budget">
<meta name="description" content="CTRL - Budget,Control Your budget">
<meta name="author" content="">
<meta property="og:url"                content="http://www.ctrl.co.in" />
<meta property="og:type"               content="Budget Planner" />
<meta property="og:title"              content="Ctrl Budget" />
<meta property="og:image" content="http://ctrl.co.in/sc.PNG"/>
<meta property="og:site_name" content="Ctrl Budget"/>
<meta property="og:description"        content="One can control their budget plans according to their needs" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">


</head>

<body STYLE="background: url(img/bg1.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1430308293958997";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="preloader">
  <div id="status"> <img src="assets/img/preloader.gif" height="64" width="64" alt=""> </div>
</div>
<a href="about.php" style="position:absolute;color:white;font-weight:bold;font-size:1.4em;right:4em;top:2em;">About &nbsp </a>
<div style="position:absolute;right:4em;top:6em;">
<div class="fb-share-button" data-href="http://www.ctrl.co.in" data-layout="button_count"></div><BR><BR>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.ctrl.co.in">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></a>
</div>

<div class="coming-soon">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="logo"> </div>
        <div style="font-size:5em;color:skyblue;font-weight:400;letter-spacing:10px;">Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l <span style="color:white;font-size:0.5em;font-weight:900;">Budget</span></div><br>
        <h3 style="color:white;font-weight:600;font-size:4em;">Coming soon</h3><br>
        <p>We are currently working on a Budget Control App. Stay tuned!</p>
        <h3>Time left until launching</h3>
        <div class="counter">
          <div class="days-wrapper"> <span class="days"></span> <br>
            days </div>
          <div class="hours-wrapper"> <span class="hours"></span> <br>
            hours </div>
          <div class="minutes-wrapper"> <span class="minutes"></span> <br>
            minutes </div>
          <div class="seconds-wrapper"> <span class="seconds"></span> <br>
            seconds </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="span12 subscribe">
      <h3>Subscribe to get notified!</h3>
      <form class="form-inline" action="#" method="POST" >
        <input type="email" name="email" placeholder="Enter your email...">
        <button type="submit">Subscribe</button><span style="font-size:1.2em;color:white;font-weight:bold;"><?php   include('db.php');$sel=mysql_num_rows(mysql_query("select * from subscriptions"));
		echo $sel." Subscribed users";?> </span>
      </form>
    </div>
  </div>
  <?php 
  include_once('db.php');
  if(isset($_POST['email']))
  {
	  $mail=$_POST['email'];
	  if($mail=='')
	  {
		  echo "<script>alert('Invalid Mail Id')</script>";
		  echo "<script>self.location='oldindex.php'</script>";
	  }
	  else
	  {
	  $query=mysql_query("insert into subscriptions values('','$mail')");
	  if($query)
	  {
		  echo "<script>alert('Subscription success')</script>";
		  echo "<script>self.location='oldindex.php'</script>";
	  }
	  else 
	  {
		  echo "<script>alert('Failed,Try again')</script>";
		  echo "<script>self.location='oldindex.php'</script>";
	  }
	  }
  }
  ?>
  <div class="row">
    <div class="span12 social"> <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a> <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a> <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a> </div>
  </div>
  <div class="span12 row">
    <div class="copyright">Copyright &copy; 2015 Design by <a href="#" rel="nofollow">WebApps Team</a></div>
  </div>
</div>

<!-- Javascript --> 
<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery.countdown.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>
