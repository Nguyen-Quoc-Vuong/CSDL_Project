<?php
include('../../config/config.php');
$hinhanh = $_FILES['hinhanh']['name']; 
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];  
$hinhanh = time().'_'.$hinhanh; 

$thoidiemden=$_POST['thoidiemden']; 
$thoidiemdi=$_POST['thoidiemdi']; 
$diemxuatphat=$_POST['diemxuatphat'];    
$diemden=$_POST['diemden']; 

$tongthoigian = $_POST['tongthoigian']; 
$giave=$_POST['giave']; 
$trangthai=$_POST['trangthai']; 
$ghichu=$_POST['ghichu']; 
$danhmuc=$_POST['danhmuc'];
// xu li hinh anh 


    if(isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO flight(hinhanh,thoidiem_den, thoidiem_di, diem_xuatphat, diem_den, tong_thoi_gian, gia_ve, trang_thai, ghi_chu,  id_danhmuc) VALUES ('".$hinhanh."','".$thoidiemden."', '".$thoidiemdi."', '".$diemxuatphat."', '".$diemden."', '".$tongthoigian."', '".$giave."', '".$trangthai."', '".$ghichu."', '".$danhmuc."')"; 
    mysqli_query($mysqli, $sql_them); 
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlisp&query=them'); 
    }  
    elseif(isset($_POST['suasanpham'])) {
        if($hinhanh != '') {
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
            $sql= "SELECT * FROM flight where FlightID = '$_GET[idsanpham]' LIMIT 1 "; 
            $query = mysqli_query($mysqli, $sql); 
            while($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']); 
        }
        $sql_update = "UPDATE flight SET hinhanh ='".$hinhanh."', thoidiem_den='".$thoidiemden."', thoidiem_di='".$thoidiemdi."', diem_xuatphat='".$diemxuatphat."', diem_den='".$diemden."', tong_thoi_gian='".$tongthoigian."', gia_ve='".$giave."', trang_thai='".$trangthai."', ghi_chu='".$ghichu."',id_danhmuc='".$danhmuc."'   WHERE FlightID = '$_GET[idsanpham]'"; 
        } else {
            $sql_update = "UPDATE flight SET hinhanh ='".$hinhanh."', thoidiem_den='".$thoidiemden."', thoidiem_di='".$thoidiemdi."', diem_xuatphat='".$diemxuatphat."', diem_den='".$diemden."', tong_thoi_gian='".$tongthoigian."', gia_ve='".$giave."', trang_thai='".$trangthai."', ghi_chu='".$ghichu."',id_danhmuc='".$danhmuc."'   WHERE FlightID = '$_GET[idsanpham]'"; 
        }
        mysqli_query($mysqli, $sql_update); 
        header('Location:../../index.php?action=quanlisp&query=them'); 
    }else {
    $id = $_GET['idsanpham']; 
    $sql= "SELECT * FROM flight where FlightID = '$id' LIMIT 1 "; 
    $query = mysqli_query($mysqli, $sql); 
    while($row = mysqli_fetch_array($query)) {
        unlink('uploads/'.$row['hinhanh']); 
    }


    $sql_xoa = "DELETE FROM flight WHERE FlightID='".$id."'"; 
    mysqli_query($mysqli, $sql_xoa); 
    header('Location:../../index.php?action=quanlisanpham&query=them'); 
 }

?>
