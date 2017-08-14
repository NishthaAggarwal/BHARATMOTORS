

<?php
include 'index.html';
foreach (glob("../css/*.css") as $filename) {
  echo"<link type='text/css' rel='stylesheet' href='$filename'>\n";
 }
  echo"<link rel='stylesheet' href='../css/bootstrap.css' type='text/css'>\n";

?>

<?php
// include 'ADMIN_login_next.html';
include '../global.php';
include '../module/function.php';

 //echo "<link rel='stylesheet' href='creative.css' type='text/css' media='screen'>\n";
?>