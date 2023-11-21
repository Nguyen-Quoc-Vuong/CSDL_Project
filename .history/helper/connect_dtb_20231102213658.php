<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ban_ve_may_bay";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>