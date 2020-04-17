<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['uid']))
{
  header('Location:index.php');   
}
else
{$uname=$_SESSION['user'];
$gtit=$_SESSION['gtit'];
$gfrom=$_SESSION['gfrom'];
	}


?>

<?php

include("db.php");

 
    $title=$_POST['title'];
    $dates=$_POST['dates'];


    function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {

           case 'image/bmp': return '.bmp';

           case 'image/gif': return '.gif';

           case 'image/jpeg': return '.jpg';

           case 'image/png': return '.png';

           default: return false;

       }

     }

if (!empty($_FILES["uploadedimage"]["name"])) {

    $file_name=$_FILES["uploadedimage"]["name"];

    $temp_name=$_FILES["uploadedimage"]["tmp_name"];

    $imgtype=$_FILES["uploadedimage"]["type"];

    $ext= GetImageExtension($imgtype);

    $imagename=date("d-m-Y")."-".time().$ext;

    $target_path = "images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

    $query_upload="INSERT into images_tbl(images_path,title,dates,uby,gtit) VALUES('".$target_path."','".$title."','".$dates."','".$uname."','".$gtit."')";

    mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 

    echo $imagename;
    echo $title;
    echo $dates;

    echo "<script>
    self.location='groups.php?title=".$gtit."&date=".$gfrom."';
    </script>";

}else{

   exit("Error While uploading image on the server");

}

}

?>
