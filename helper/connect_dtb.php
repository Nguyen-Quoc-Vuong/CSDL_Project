<?php
try{
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "ban_ve_may_bay";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName, '3307');
    if (!$conn) {
        die("Something went wrong;");
    }
} catch(Exception $e) {
    echo $e->getMessage().'<br>';
    die("Something went wrong;");
}

?>