<link rel='shortcut icon' type='image/x-icon' href='icon.jpg' />
<?php

$hostname='localhost';
$dbname='ctrl';
$username='root';
$password='';


mysql_connect($hostname,$username,$password) or DIE('error while connecting');

mysql_select_db($dbname) or DIE('error on connecting to database');
?>