<?php
session_start();
$con=mysqli_connect("bwlslb1rt9c08mofpx80-mysql.services.clever-cloud.com","uyvpwc55sluohcde","z7S7QGcaukT9ieKeF3E9","bwlslb1rt9c08mofpx80");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>
