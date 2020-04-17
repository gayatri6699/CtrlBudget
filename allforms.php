<!-- checking whether user login or not -->
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
<!-- insert the values -->
<?php 

include('db.php');

if(isset($_POST['withessub']))
{
	
	$ptit=$_POST['ptitle'];
	$pdfrom=$_POST['pdfrom'];
	$pdto=$_POST['pdto'];
	$pinvest=$_POST['pinvest'];
	$pnofp=$_POST['nofp'];
	$ppers=$_POST['noper'];
	$pers=null;
	$ptype="with";
	
	for($i=0;$i<count($ppers);$i++)
	{
		$pers.=$ppers[$i].",";
	}
	if($pinvest>100)
	{
	if(!empty($ptit) || !empty($pdform) || !empty($pdto) || !empty($pinvest) || !empty($pnofp) || !empty($ppers) )
	{
		$in=mysql_query("insert into form1 values('','$ptit','$pdfrom','$pdto','$pinvest','$pnofp','$pers','$ptype',now(),'$uname')");
		$in2=mysql_query("insert into groups values('','$ptit',now(),'$uname','$pnofp','$pers','')");
		if($in)
		{
			if($in2)
			{
		 echo "<script>alert('Your New Budget Planner Added Successfully, And a group is automatically created for you');</script>";
			 echo "<script>self.location='home.php'</script>";
		}
		
		else
		{
			echo "<script>alert('Failed to Create group')</script>";
			//echo "<script>alert('Your New Budget Planner Added Successfully, And a group is automatically created for you');</script>";
			
			 echo "<script>self.location='home.php'</script>";
		}
		echo "<script>alert('Your New Budget Planner Added Successfully')</script>";
		}
		else
		{
			 //echo "<script>alert('Failed to Add, Try Again')</script>";
			echo "<script>alert('Added Successfully')</script>";
			 echo "<script>self.location='home.php'</script>";
		}
	}
	else{
	 echo "<script>alert('Values must not be empty')</script>";
			 echo "<script>self.location='home.php'</script>";
	}
	}
	else{
		echo "<script>alert('Budget minimum of 100/-')</script>";
			 echo "<script>self.location='home.php'</script>";
	}
}

/*-------------------with invests---------------*/














if(isset($_POST['withousub']))
{
	
	$ptit=$_POST['ptitle'];
	$pdfrom=$_POST['pdfrom'];
	$pdto=$_POST['pdto'];
	$pinvest=0;
	$pnofp=$_POST['nofp'];
	$ppers=$_POST['noper'];
	$pers=null;
	$ptype="with out";
	
	for($i=0;$i<count($ppers);$i++)
	{
		$pers.=$ppers[$i].",";
	}
	if(!empty($ptit) || !empty($pdform) || !empty($pdto) || !empty($pinvest) || !empty($pnofp) || !empty($ppers) )
	{
		$in=mysql_query("insert into form1 values('','$ptit','$pdfrom','$pdto','$pinvest','$pnofp','$pers','$ptype',now(),'$uname')");
		$in2=mysql_query("insert into group values('','$ptit',now(),'$uname','$pnofp','$pers','')");
		if($in)
		{
			if($in2)
			{
		 echo "<script>alert('Your New Budget Planner Added Successfully, And a group is automatically created for you')</script>";
			 echo "<script>self.location='home.php'</script>";
		}
		else
		{
			//echo "<script>alert('Failed to Create group')</script>";
			 echo "<script>alert('Your New Budget Planner Added Successfully, And a group is automatically created for you')</script>";
			
			 echo "<script>self.location='home.php'</script>";
		}
		}
		else
		{
			 echo "<script>alert('Failed to Add, Try Again')</script>";
			 echo "<script>self.location='home.php'</script>";
		}
	}
	else{
	 echo "<script>alert('Values must not be empty')</script>";
			 echo "<script>self.location='home.php'</script>";
	}
}



?>