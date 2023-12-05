<?php
include('../../config/config.php');


$email=$_POST['email']; 


// xu li hinh anh 

   

    if(isset($_POST['themsanpham'])) {
        $sql="SELECT* FROM users WHERE role = 0 AND email = '$email'";
        $result = mysqli_query($mysqli, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $fullname=$user['fullname']; 
                $password=$user['password']; 
                $sql_them = "UPDATE users  SET role = 1 WHERE role = 0 AND email = '$email'"; 
        mysqli_query($mysqli, $sql_them); 
        // move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanliAdmin&query=them'); 
    }  else {
        $emailid = $_GET['email']; 
        $sql_xoa = "UPDATE users  SET role = 0 WHERE role = 1 AND email = '$emailid'"; 
        mysqli_query($mysqli, $sql_xoa); 
        header('Location:../../index.php?action=quanliAdmin&query=them'); 
 }


?>
