<?php                            


include 'db.php';

if(isset($_POST))  
{  

	////////////////////////  validations ///////////////////////

	if(!empty($_POST['email'])&&
      !empty($_POST['user'])&&
       !empty($_POST['pass']))
 {

  $email=$_POST['email'];
  $userid=$_POST['user'];
   $pswd=$_POST['pass'];





                            


 
 if(strlen($userid)<30){
	  
   
  
   if(strlen($pswd)>6){
	
   

		 if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			
			 $query = "INSERT INTO register(email,user,pass) VALUES('$email','$userid','$pswd')";

                            $data = mysql_query($query)or die(mysql_error()); 

                            if($data) {     // condition for query 

	
	                         echo "<script>

	                        window.alert('success');
  
  
                             </script>";

                            echo "<script>  self.location='sign.php';
                             </script>";
	 


	

                             }
                             else
                              {
	                          echo "<script>alert('you have gone wrong')</script>";
							  echo "<script>self.location='index1.php'</script>";
							  

                                }
       
		 }
		 else{
			 echo "<script>alert('invalid email entered')</script>";
			 echo "<script>self.location='index1.php'</script>";
		 }
		
	 }
	  else {
	  echo "<script> alert('password must not less than 6')</script>";
	  echo "<script>self.location='index1.php'</script>";
	  }

   
}
 else {
 echo "<script> alert('username must not less than 30')</script>";
 echo "<script>self.location='index1.php'</script>";
 }

}
                      
 else {echo "<script> alert('values must not be empty')</script>";
 echo "<script>self.location='index1.php'</script>";
 }




   


   // end of validations 


  
}

else
{
	echo "<script> alert('Error Occured:data you entered wrong')</script>";
	echo "<script>self.location='index1.php'</script>";
}




/* $query = "INSERT INTO register(email,user,pass) VALUES('$email','$userid','$pswd')";

                            $data = mysql_query($query)or die(mysql_error()); 

                            if($data) {     // condition for query 

	
	                         echo "<script>

	                        window.alert('success');
  
  
                             </script>";

                            echo "<script>  self.location='index.php';
                             </script>";
	 


	

                             }
                             else
                              {
	                          echo "you have gone wrong";

                                }
       */
?>


