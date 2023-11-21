<?php


$mysqli = new mysqli("localhost","root","","ban_ve_may_bay");


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>