<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
if(isset($_POST['themdanhmuc'])) {
    
    $sql_them = "INSERT INTO cities(city) VALUES ( '".$tenloaisp."')"; 
    mysqli_query($mysqli, $sql_them); 
    header('Location:../../index.php?action=quanlicity&query=them'); 
}
 else {
    $id = $_GET['id']; 
    $sql_xoa = "DELETE FROM cities WHERE id='".$id."'"; 
    mysqli_query($mysqli, $sql_xoa); 
    header('Location:../../index.php?action=quanlicity&query=them'); 
 }

?>
