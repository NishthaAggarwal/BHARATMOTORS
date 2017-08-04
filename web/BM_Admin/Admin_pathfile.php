<?php
//include 'index.html' ;
foreach (glob("../css/*.css") as $filename) {
  echo"<link type='text/css' rel='stylesheet' href='$filename'>\n";
} 
include 'ADMIN_login_next.html';
include '../global.php';

 //echo "<link rel='stylesheet' href='creative.css' type='text/css' media='screen'>\n";
?>