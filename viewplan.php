<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['uid']))
{
  header('Location:index.php');   
}
else
{$uname=$_SESSION['user'];
	}

if(!isset($_GET['title']) && !isset($_GET['id']))
{
	  header('Location:home.php');  
}
?>






<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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


.viewold{
margin-top:1%;

padding:5px 10px;
box-shadow:0px 0px 5px #303030;
margin-left:30px;
margin-bottom: 50px;

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
<li><a href="stats.php" ><i class="fa fa-bar-chart"></i> &nbsp Statistics</a></li>
<?php 
}
?>
<li><a href="logout.php" ><i class="fa fa-sign-out"></i> &nbsp Logout</a></li>


</ul>
</nav>

<div class="container">

<!--retrieve the users data-->
 <?php 
   include_once('db.php');
   $gettitle=$_GET['title'];
   $getid=$_GET['id'];
   $sel=mysql_query("select * from form1 where ptitle='$gettitle' && id='$getid' ");
   if(mysql_num_rows($sel)>0)
   {
	   while($fet=mysql_fetch_array($sel))
	   {
   $ptit=$fet['ptitle'];
   $pdfrom=$fet['pdfrom'];
   $pdto=$fet['pdto'];
   $pinvest=$fet['pinvest'];
   $inibudget=$fet['pinvest'];
   $nofp=$fet['nofp'];
   $noper=$fet['noper'];
   $ptype=$fet['ptype'];
   $pcreation=$fet['pcreation'];
    $mypers=explode(',',$noper);
   
   }}
   ?>
   <h2 style="color:black;">Parent Plan</h2>
   <div class="row" >   
   <div class="col-md-12 viewold" >   
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
        <td>Initial Budget </td>
		<td><?php echo $pinvest;?></td>
		
</tr>
      <tr>
        
		<?php 
		$sel=mysql_query("select * from sublinks where ptit='$ptit' ");
		if(mysql_num_rows($sel)>0)
		{
			
			while($fet=mysql_fetch_array($sel))
			{
				$pbud=$fet['spamount'];
				if($ptype=="with")
				{
					$pinvest=$pinvest-$pbud;
					
				}
				else 
				{
					$pinvest=$pinvest+$pbud;
				}
			}
		}
		if($ptype=="with"){
		echo "<td>Remaining Amount</td><td>";
        }
		else{echo "<td>Amount Spent</td><td>";}
		echo $pinvest;
		
		?>
		</td>
        
      </tr>
      </tbody>

     </table>

<a href="http://localhost/ctrl/groups.php?title=<?php echo $ptit."&date=".$pdfrom;?>" class="btn btn-default" style="float:right;margin-right:30px;">Group</a>
    </div>  <!-- view old -->

	<div class="container">
	 <div class="row">
	<div class="col-md-8">
	 <?php 
   include_once('db.php');
   $gettitle=$_GET['title'];
   $getid=$_GET['id'];
   $sell=mysql_query("select * from sublinks where ptit='$gettitle' ");
   if(mysql_num_rows($sell)>0)
   {
	   while($fet=mysql_fetch_array($sell))
	   {
   $ptit=$fet['ptit'];
   $ltit=$fet['ltit'];
   $ldate=$fet['ldate'];
   $spamount=$fet['spamount'];
   $spentby=$fet['spentby'];
   
   
   
   ?>

   <div class="col-md-3 viewold" width="600px;">   
      <table class="table table-condensed">
      <thead>
       <tr>
        
        <th><?php echo $ltit;?></th>
	   </tr>
      </thead>

      <tbody>
      <tr>
        <td>On</td>
        <td><?php echo $ldate;?></td>
        
      </tr>
      <tr>
        <td>Amount</td>
        <td><?php echo $spamount;?></td>
        
      </tr>
 <tr>
        <td>By </td>
		<td><?php echo $spentby;?></td>
		
</tr>
     
      </tbody>

     </table>

    </div> <!-- view old -->
<?php 
}}?>
	 </div>
	 
	 
	<div class="col-md-4 " style="margin-top:-7%;border:0px solid gray;">
 <form role="form" action="#" method="post" name="addlink">
            <div class="col-md-11"style="border:1px solid lightgray;padding:20px;">
                <div class="well well-sm"  class="btn btn-primary pull-right"><strong style="width:300px;">Add New link</strong></div>
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="ltit" id="InputName" placeholder="Enter Title" style="width:300px;"required>
                       
                    </div>
                </div>
				<div class="form-group">
                    
                    <div class="input-group">
                        <input type="date" class="form-control" name="ldate" id="InputName" placeholder="Enter Title" style="width:300px;"required>
                       
                    </div>
                </div>

				
			
                <div class="form-group">
                     
                    <div class="input-group">
                      <input type="number" class="form-control" id="InputEmailFirst" name="spamount" placeholder="Initial Investment" style="width:300px;"required>
                      
                    </div>
                </div>
				 <div class="form-group">
                     
                    <div class="input-group">
               <select type="input" name="spentby"class="form-control " >
			   <option>Choose</option>
			    <?php for($i=0;$i<count($mypers)-1;$i++)
   {
	   echo "<option value='".$mypers[$i]."'>".$mypers[$i]."</option>";
   }
     ?>
			   </select>
			   </div>
			   </div>
		
                
                <input type="submit" name="addlink" id="submit" value="Submit" class="btn btn-primary right" style="width:300px;">
            </div>
        </form>
	<br><br>
	
	<div type="button" class="btn btn-success col-md-12" data-toggle="modal" data-target="#myModal">
  Budget Analyzer
</div>
	
	
	
	



	

	
</div> 

	 
	 
	 </div>
	 </div>
</div>
</div>

 	
	
	

	

	

		<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></div>
        <h4 class="modal-title" id="myModalLabel">Budget Analyzer</h4>
      </div>
      <div class="modal-body">
           
	
			   
                                    <table class="table table-striped table-bordered table-hover " style="border:1px solid lightgray;">
                                        
										
                                        
	<?php 
	$mytit=$gettitle;
	$persons=$nofp;
	$initialbud=$pinvest;
	$psp=null;
	$tbudp=0;
error_reporting(0);
?>
										<tr>
										<td>Title</td><td><?php echo $mytit;?></td>
										</tr>
										<tr>
										<td>No of persons</td><td><?php echo $nofp;?></td>
										</tr>
										<tr>
										<td>Initial Budget</td><td><?php echo $inibudget;?></td>
										</tr>
<?php 
	for($i=0;$i<count($mypers)-1;$i++)
   {
	   echo "<tr><td>".$mypers[$i]."</td>";
	   $myq=mysql_query("select * from sublinks where spentby='$mypers[$i]' && ptit='$mytit'");
	   if(mysql_num_rows($myq)>0)
	   {
	   while($ret=mysql_fetch_array($myq)){
		   if($ret['spamount'])
		   {
	   $psp[$i]+=$ret['spamount'];
		   }
	   }
	    
	   }if($psp[$i]=='')
	   {
		   
		  $psp[$i]=0;
echo "<td>".$psp[$i]."</td></tr>";		  
	   }
	   else{
echo "<td>".$psp[$i]."</td></tr>";
	   }
	   $tbudp+=$psp[$i];
   }
	?>
	<tr>
										<td>Total spent</td><td><?php echo $tbudp;?></td>
										</tr>
										<tr>
										<td>Remaining amount</td><td><?php $rmngbud=$inibudget-$tbudp;echo $rmngbud;?></td>
										</tr>
										<tr>
										<td>Individual shares</td><td><?php $inshare=$tbudp/$nofp;echo $inshare;?></td>
										</tr>
										
										<?php 
										
										for($i=0;$i<count($mypers)-1;$i++)
   {
	   
	   if($psp[$i]>$inshare)
	   {
		   echo "<tr><td>".$mypers[$i]."</td><td> +".($psp[$i]-$inshare)."</td></tr>";
	   }
	   else
	   {
		  echo "<tr><td>".$mypers[$i]."</td><td> -".($inshare-$psp[$i])."</td></tr>";
	   }

	   }
	
	    
	   
	   
   
	?>
										
										
										
										
	</table>
	
      </div>
      <div class="modal-footer">
        <div type="button" class="btn btn-primary" data-dismiss="modal">Close</div>
      
      </div>
    </div>
  </div>
</div>
	
	

	
	
<?php
include_once('db.php'); 
if(isset($_POST['addlink']))
{
	$ltit=$_POST['ltit'];
	$ldate=$_POST['ldate'];
	$spamount=$_POST['spamount'];
	$spentby=$_POST['spentby'];
	$qu=mysql_query("insert into sublinks values('','$ltit','$ldate','$spamount','$spentby','$ptit','$pinvest','$ptype','$pdfrom')");
	if($qu){
		echo "<script>alert('New Spendings added')</script>";
			echo "<script>
    self.location='viewplan.php?title=".$gettitle."&id=".$getid."';
    </script>";
	}
}
?>

</body>
</html>