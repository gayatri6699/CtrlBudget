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
body {
    background-image: url("img/bg1.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
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
body{
  margin:0;
  color:#333;
  font-family:sans-serif
}
h1{
  text-align:center;
  font-family:serif;
  color:#aaa
}
.card {
  width:33%;
  min-width: 330px;
  height: 330px;
  overflow: hidden;
  position: relative;
  margin:1% 0;
  display:inline-block
}

.card img {
  width: 100%;
  min-height:100%;
  transition:all 0.9s
}
.card:hover img{
 transform:scale(1.2,1.2)
}
.data {
  position: absolute;
  bottom: 5%;
  background: #fff;
  text-align:center;
  width: 90%;
  height: 80px;
  overflow: hidden;
  left: 0;
  right: 0;
  margin: 0 auto;
  padding: 10px;
  box-sizing: border-box;
  opacity: 0.8;
  transition: all 0.4s
}

.card:hover .data {
  width: 100%;
  height: 100%;
  bottom: 0;
  opacity: 0.9;
  padding-top:90px
}

.data h2 {
  margin: 0 0 5px 0
}

.data p {
  opacity: 0;
  text-align:justify;
  transition: all 0.2s
}

.card:hover .data p,.card:hover .data a {
  opacity: 1
}

.data a{
  color:#333;
  text-decoration:none;
  padding:20px;
  opacity:0
}
.data a:hover{
  color:#33a
}

@media (max-width:999px){
  .card {width:100%}
}


</style>
</head>
<body >

<nav class="clearfix">


<div class="logo" style="font-size:2em;color:skyblue;font-weight:400;letter-spacing:10px;">
Ct<i class="fa fa-inr " style="font-size:0.8em;"></i>l 
<span style="color:gray;font-size:0.5em;font-weight:900;">Budget</span>&nbsp &nbsp &nbsp

</div>
       
     

<ul id="top">
<li><a href="home.php"><i class="fa fa-home"></i> &nbsp Home</a></li>
<li><a href="about.php"><i class="fa fa-info"></i> &nbsp About</a></li>
<li><a href="team.php"><i class="fa fa-group"></i> &nbsp Team</a></li>




</ul>
</nav>


<h1>Our Team</h1>
<div class="card"  style="margin-left: 20px;">
  <img src="img/su.jpg" alt="" />
  <div class="data">
    <h1>Sunil</h1>
    <h3>Front end developer</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
    <a href="https://www.facebook.com/sunil.prince.31924" class="fa fa-facebook"></a>
   
<a href="#" class="fa fa-linkedin"></a>  </div>
</div>
<div class="card" style="margin-left: 380px;">
  <img src="img/g.jpg" alt="" />
  <div class="data">
    <h1>Gayatri</h1>
    <h3><.Php></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
    <a href="#" class="fa fa-facebook"></a>
   
<a href="#" class="fa fa-linkedin"></a>  </div>
</div>
<br>
<br>
<div class="card" style="margin-left: 420px;">
  <img src="img/p.jpg" alt="" />
  <div class="data">
    <h1>Prabhakar</h1>
    <h3>Product manager</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
    <a href="https://www.facebook.com/mudda.yashaswi" class="fa fa-facebook"></a>
   
<a href="https://www.linkedin.com/in/mudda-prabhakar-yashaswi-679613101" class="fa fa-linkedin"></a>  </div>
</div>
<br>
<br>
<div class="card" style="margin-left: 20px;">
  <img src="img/srikar.jpg" alt="" />
  <div class="data">
    <h1>Srikar</h1>
    <h3>Product Designer</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
    <a href="https://www.facebook.com/srikarandhavarapu.srikarandhavarapu" class="fa fa-facebook"></a>
    
<a href="#" class="fa fa-linkedin"></a>  </div>
  </div>
  <div class="card" style="margin-left: 380px;">
  <img src="img/s.jpg" alt="" />
  <div class="data">
    <h1>Sai kumar</h1>
    <h3><.Php></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam sedesmi. Consectetur elit placerat mollis donec dolor.</p>
   <a href="https://www.facebook.com/saikumarvandrangi" class="fa fa-facebook"></a>
    
    <a href="https://www.linkedin.com/in/sai-kumar-99a01a7a?trk=nav_responsive_tab_profile" class="fa fa-linkedin"></a>
  </div>
</div>


    

   

 




</body>
</html>