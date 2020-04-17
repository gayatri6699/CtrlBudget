<?php

session_start();
unset($SESSION['mystatus']);         
session_destroy();
header('Location: index.php');


?>