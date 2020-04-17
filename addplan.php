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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>

nav{
	dsiplay:block;
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
#withes{display:none;}
#withou{display:none;}
BODY{background:#F8F8F8;}
</style>
</head>
<body>
<script type="text/javascript">
 $(document).ready(function(){
  $('#myModal').modal('show')
});
</script>
<?php 
include('topmenu.php');
?>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Type of Investement</h4>
      </div>
      <div class="modal-body">
        Will you add Initial Budget Investment ?
      </div>
      <div class="modal-footer">
        <div type="button" class="btn btn-primary" data-dismiss="modal" id="ini" >Yes</div>
        <div type="button" class="btn btn-primary" data-dismiss="modal" id="noini" >No</div>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 Change Type
</div>

       
<script>
$("#ini").click(function() { 
   var mb = "Yes";
   
  if(mb=='Yes')
  {
	  $("#withes").show();
	  $("#withou").hide();
  }	  
});
$("#noini").click(function() { 
   var mb = "No";
  
  if(mb=='No')
  {
	  $("#withou").show();
	  $("#withes").hide();
  }	  
});
</script>

<div class="container" id="withes" >



<!-- Registration form - START -->

        <form role="form" action="allforms.php" method="post" name="inies">
            <div class="col-md-11" style="border:1px solid lightgray;padding:20px;">
                <div class="well well-sm"  class="btn btn-primary pull-right"><strong style="width:300px;">With Initial investment</strong></div>
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="ptitle" id="InputName" placeholder="Enter Title" style="width:300px;" required>
                       
                    </div>
                </div>
				<div class="col-xs-6">
 <label>From:</label>
  <input class="form-control" name="pdfrom" id="ex1" type="date">
</div>
<div class="col-xs-6">
   <label>To:</label>
  <input class="form-control" name="pdto" id="ex2" type="date">
</div>
                <div class="form-group">
                     
                    <div class="input-group">
                      <input type="number" class="form-control" id="InputEmailFirst" name="pinvest" placeholder="Initial Investment" style="width:300px;"required>
                        
                    </div>
                </div>
                <div class="form-group">
                   
                    <div class="input-group">
                        <input type="number" class="form-control" id="InputEmailSecond" name="nofp" placeholder="No of persons" style="width:300px;"required>
                        <input type="button" class="btn btn-primary" value="Add" onClick="addques()">
						<div id="myques"></div>
                    </div>
                </div>
				<script language="javascript">
function addques()
{
	var k=document.inies.nofp.value;
var  i;
for(i=1;i<=k;i++){
myques.innerHTML = myques.innerHTML +"Person " + i + ":<br><input type='text'class='form-control' style='width:300px;'  name='noper[]'>"

}
}
</script>
                
                <input type="submit" name="withessub" id="submit" value="Submit" class="btn btn-primary right" style="width:300px;">
            </div>
        </form>
        
  
<!-- Registration form - END -->

</div>


<div class="container"id="withou">



<!-- Registration form - START -->

        <form role="form" action="allforms.php" method="post" name="noinis">
            <div class="col-md-11" style="border:1px solid lightgray;padding:20px;">
                <div class="well well-sm"  class="btn btn-primary pull-right"><strong style="width:300px;">With out Initial investment</strong></div>
                <div class="form-group">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" name="ptitle" id="InputName" placeholder="Enter Title" style="width:300px;"required>
                       
                    </div>
                </div>
				<div class="col-xs-6">
 <label>From:</label>
  <input class="form-control" name="pdfrom" id="ex1" type="date">
</div>
<div class="col-xs-6">
   <label>To:</label>
  <input class="form-control" name="pdto" id="ex2" type="date">
</div>
               
                <div class="form-group">
                   
                    <div class="input-group">
                        <input type="number" class="form-control" id="InputEmailSecond" name="nofp" placeholder="No of persons" style="width:300px;"required>
                        <input type="button" class="btn btn-primary"value="Add" onClick="addques2()">
						<div id="myq"></div>
                    </div>
                </div>
				<script language="javascript">
function addques2()
{
	var k=document.noinis.nofp.value;
var  i;
for(i=1;i<=k;i++){
myq.innerHTML = myq.innerHTML +"Person " + i + ":<br><input type='text'class='form-control' style='width:300px;'  name='noper[]'>"

}
}
</script>
                
                <input type="submit" name="withousub" id="submit" value="Submit" class="btn btn-primary right" style="width:300px;">
            </div>
        </form>
        
   
<!-- Registration form - END -->

</div>

</body>
</html>