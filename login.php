

<?php                                                

  
   include 'db.php';

   $userid=$_POST['user'];
   $pswd=$_POST['pass'];

    $sql= "SELECT *FROM register where user='$userid' and pass='$pswd'";

    $res=mysql_query($sql) or die(mysql_error());
    
    $num=  mysql_num_rows($res); 
    
    
    
   if($num>0)  
{
    $row= mysql_fetch_array($res); 
    
    $uid=$row['id'];
    
            
     if($row['user']==$userid) 
       {
         @session_start();
        
        $_SESSION['user']=$userid;
		
		 $_SESSION['uid']=$uid; // for next page
       
               
        header('Location: home.php');
       }

       else
       {
        header('Location: index.php');
       }
	   
}

else{
	
	
 
  echo "<script>window.alert('Wrong Credentials');</script>";

  echo "<script>window.location='index1.php';</script>";
 
	
	
}
    

?>