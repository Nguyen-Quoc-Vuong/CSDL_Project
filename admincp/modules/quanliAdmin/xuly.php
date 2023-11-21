<?php
include('../../config/config.php');

$fullname=$_POST['fullname']; 
$email=$_POST['email']; 
$password=$_POST['password'];    
$role=$_POST['role']; 

// xu li hinh anh 


    if(isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO users(fullname,email,password ,role) VALUES ('".$fullname."','".$email."', '".$password."', '".$role."')"; 
    mysqli_query($mysqli, $sql_them); 
    // move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanliAdmin&query=them'); 
    }  else if(isset($_POST['suasanpham'])) {
        $sql_update = "UPDATE users SET fullname ='".$fullname."', email='".$email."', password='".$password."', role='".$role."' WHERE UsersID = '$_GET[idsanpham]'"; 
        mysqli_query($mysqli, $sql_update); 
        header('Location:../../index.php?action=quanliAdmin&query=them'); 
    }
    else {
        $id = $_GET['idsanpham']; 
        $sql_xoa = "DELETE FROM users WHERE UsersID='".$id."'"; 
        mysqli_query($mysqli, $sql_xoa); 
        header('Location:../../index.php?action=quanliAdmin&query=them'); 
 }

?>
