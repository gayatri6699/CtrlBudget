<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['uid']))
{
  header('Location:index.php');   
}
else
{$uname=$_SESSION['user'];
	}


?>






<html>
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

ul#top li
{
	font-size:1em;
margin-top:8px;
	float:left;margin-left:20px;color:white;
}
	a{color:black;text-decoration:none;}
a:hover{color:skyblue;text-decoration:none;}

.jumbotron{
	background-color:skyblue;
}



</style>
</head>
<body>

<nav class="clearfix">


<div class="logo" style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">
Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l 
<span style="color:gray;font-size:0.5em;font-weight:900;">Budget</span>&nbsp &nbsp &nbsp
<span style="color:black;font-size:16;font-weight:bold;letter-spacing:5px;"><?php echo "Welcome ". $_SESSION['user'];?></span>
</div>
       
	   

<ul id="top">
<li><a href="home.php"><i class="fa fa-home"></i> &nbsp Home</a></li>
<li><a href="about.php"><i class="fa fa-info"></i> &nbsp About</a></li>
<?php if(isset($_SESSION['user']) && isset($_SESSION['uid']))
{?>
<li><a href="addplan.php"><i class="fa fa-plus"></i> &nbsp Add New</a></li>

<?php 
}
?>
<li><a href="logout.php" ><i class="fa fa-sign-out"></i> &nbsp Logout</a></li>


</ul>
</nav>


   <!--retrieve the users data -->
 <?php 
   include_once('db.php');
   $gettitle=$_GET['title'];
   $getdate=$_GET['date'];
   $sel=mysql_query("select * from form1 where ptitle='$gettitle' && pdfrom='$getdate' ");
   if(mysql_num_rows($sel)>0)
   {
	   while($fet=mysql_fetch_array($sel))
	   {
   $ptit=$fet['ptitle'];
   $pdfrom=$fet['pdfrom'];
   $pdto=$fet['pdto'];
   $pinvest=$fet['pinvest'];
   $nofp=$fet['nofp'];
   $noper=$fet['noper'];
   $ptype=$fet['ptype'];
   $pcreation=$fet['pcreation'];
   }}
   @session_start();
   $gtit=$_SESSION['gtit']=$ptit;
   $gfrom=$_SESSION['gfrom']=$pdfrom;
   $mypers=explode(',',$noper);
   
   
   ?>
   

 <div class="container-fluid">


  <div class="jumbotron">
   
   <div class="row" style="height:250px;">

    <div class="col-md-7" style=" ">
    <h1 style="text-align:center">Welcome to <?php echo $gtit;?> Buddy</h1> 
    <p style="text-align:center">Share more to know more and to control more</p>
    </div>
  </div>
</div>

 <div class="container">
     <div class="row">
    
    <div class="col-md-7" style="box-shadow:0px 0px 5px #303030;">
      <p>Here are your posts man</p>
<!-- retrieve the user data-->
      <?php

include("db.php");

 

$select_query = "SELECT images_path,title,dates FROM images_tbl where uby='$uname' && gtit='$gtit'ORDER by images_id DESC";



$sql = mysql_query($select_query) or die(mysql_error());   

while($row = mysql_fetch_array($sql,MYSQL_BOTH))

{

 

?>
      <div class="col-md-4" style="border:1px solid lightgray;">
      <center>
      <h4><strong>Title:</strong><?php echo $row["title"]; ?></h4>
      <h4><strong>Date:</strong><?php echo $row["dates"]; ?></h4>
      <a href="<?php echo $row["images_path"]; ?>" target="_blank">
      <img style="height:200px;width:200px;margin-bottom:5px;" src="<?php echo $row["images_path"]; ?>" >
      </a>
      </center>
      </div>

      
<?php

}

?>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-4 panel-body" style="box-shadow:0px 0px 5px #303030;">

     <h2 style="color:brown;text-align:center;">Post Here</h2>
     
     
<form role="form" action="saveimage.php" method="post" style="padding:1px 20px;display:block;margin:0em;" enctype="multipart/form-data">
  
  <!--Add your links-->
  <div class="form-group">
    <label for="text">Add Title</label>
    <input type="text" class="form-control" id="text" name="title">
  </div>

  
  <div class="form-group">
    <label for="text">Date</label>
    <input type="date" class="form-control" id="text" name="dates">
  </div>

 .
  
  <div class="form-group">
  <label for="text">Image</label>
    <input type="file" class="form-control" id="" name="uploadedimage">
  </div>
  <input type="submit" class="btn btn-primary" value="POST HERE" name="Upload Now">
</form>
               
    </div>
	
	
	<br><br>
	    <div class="row col-md-4 panel panel-primary" style="margin-top:50px;margin-right:0px;float:right;box-shadow:0px 0px 5px #303030;">
<div class="panel-heading">Group Members</div>
     
	    <div class="table-responsive">
			   
                                    <table class="table table-striped table-bordered table-hover">
                                        
                                        
													
<!-- retrieve the group members-->										
	 <?php for($i=0;$i<count($mypers)-1;$i++)
   {
	   echo "<tr><td>".$mypers[$i]."</td></tr>";
   }
     ?>
  
       </table>        
    </div>

   </div>
</div>
</body>
</html>