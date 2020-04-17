

<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['uid']))
{
  header('Location:index.php');   
}

else
{$uname=$_SESSION['user'];
$uid=$_SESSION['uid'];
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
{font-size:1em;
margin-top:8px;
	float:left;margin-left:20px;color:white;
}
	a{color:black;text-decoration:none;}
a:hover{color:skyblue;text-decoration:none;}





.viewold{


padding:5px 10px;
box-shadow:0px 0px 5px #303030;
margin-left:30px;
margin-bottom: 50px;

}


.group{

padding:5px 10px;
box-shadow:0px 0px 5px #303030;

margin-bottom: 50px;
float:right;
}
table thead tr th{

	color:black;
	font-size: 20;
}




BODY{background:#F8F8F8;}


</style>
</head>
<body bgcolor="#F8F8F8">

<nav class="clearfix">


<div class="logo"style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">
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





<div class="container">

   <div class="row">
      <div class="col-md-6">
<h3 style="margin-bottom:50px;float:left;margin-left:100px;">All your Budget Listings</h3>
     </div>
   
 </div>
</div>

<!--  row 1 -------------------------------------------------------------------->
<div class="container">
   <div class="row">
   <?php 
   include_once('db.php');
   $sel=mysql_query("select * from form1 where uname='$uname' order by id desc ");
   if(mysql_num_rows($sel)>0)
   {
	   while($fet=mysql_fetch_array($sel))
	   {
   $pid=$fet['id'];
   $ptit=$fet['ptitle'];
   $pdfrom=$fet['pdfrom'];
   $pdto=$fet['pdto'];
   $pinvest=$fet['pinvest'];
   $nofp=$fet['nofp'];
   $noper=$fet['noper'];
   $ptype=$fet['ptype'];
   $pcreation=$fet['pcreation'];
   ?>
      <div class="col-md-5 viewold" >   
      <table class="table table-condensed">
      <thead>
       <tr>
        <th>Title</th>
        <th><?php echo $ptit;?></th>
	   </tr>
      </thead>

      <tbody>
      <tr>
        <td>Between</td>
        <td><?php echo $pdfrom;?> <span style="color:brown;font-weight:bold;">to</span> <?php echo $pdto;?></td>
        
      </tr>
      <tr>
        <td>Persons</td>
        <td><?php echo $nofp;?></td>
        
      </tr>

      <tr>
        <td>Budget</td>
        <td><?php echo $pinvest;?></td>
        
      </tr>
      </tbody>

     </table>

<a href="http://localhost/ctrl/groups.php?title=<?php echo $ptit."&date=".$pdfrom;?>" class="btn btn-default" style="float:right;margin-right:30px;">Group</a>
    </div>  <!-- view old -->


<a href="viewplan.php?title=<?php echo $ptit;?>&id=<?php echo $pid;?>"><i class="fa fa-plus-circle fa-3x"  style="float:left;color:#337ab9;cursor:pointer;margin-left:-20px;margin-top:-20px;"></i>
   
   </a>
   



   
   
<?php 
	   }
   }
?>
    

   

 

  </div><!-- row -->
  </div><!-- row -->

  <!-- end of row 1 -->

    


    
 
  


</div>  <!-- container -->



</body>
</html>