<?php
session_start();
// $connect = mysql_connect("localhost","root","");
// $db = mysql_select_db("fljc");
?>

<?php
// session_start();
// $connect = mysql_connect("mysql.hostinger.ph","u117518275_fljc","123qwe");
// $db = mysql_select_db("u117518275_fljc");
?>

<?php
$con = mysqli_connect("localhost","root","root","rr");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

date_default_timezone_set('Asia/Manila');
$treg =  date('Y-m-d');
?>