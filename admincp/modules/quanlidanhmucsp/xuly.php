<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc']; 
$thutu = $_POST['thutu']; 
if(isset($_POST['tendanhmuc']) && isset($_POST['thutu'])) {
    if(!isset($_POST['suadanhmuc'])) {
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc, thutu) VALUES ('".$tenloaisp."','".$thutu."')"; 
    mysqli_query($mysqli, $sql_them); 
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them'); 
    }  
    if(isset($_POST['suadanhmuc'])) {
        $id = $_GET['iddanhmuc']; 
        $tenloaisp = $_POST['tendanhmuc']; 
        $thutu = $_POST['thutu']; 
        
        $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc ='".$tenloaisp."', thutu='".$thutu."'  WHERE id_danhmuc='". $id ."'"; 
        mysqli_query($mysqli, $sql_update); 
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them'); 
    }
}
 else {
    $id = $_GET['iddanhmuc']; 
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'"; 
    mysqli_query($mysqli, $sql_xoa); 
    header('Location:../../index.php?action=quanlidanhmucsanpham&query=them'); 
 }

?>
