<?php 
   $sql_sua_sp = "SELECT * FROM users WHERE UsersID = '$_GET[idsanpham]' LIMIT 1"; 
   $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp); 
   ?>
<p>Sửa admin</p>
<table border="1px" width="100%" style="border-collapse: collapse;">
   <?php 
      while($row = mysqli_fetch_array($query_sua_sp)) {
      ?>
   <form method="POST" action="modules/quanliAdmin/xuly.php?idsanpham=<?php echo $row['UsersID'] ?>" enctype="multipart/form-data">
   <tr>
         <td>Họ và tên</td>
         <td><input type="text" name="fullname" /></td>
      </tr>
      <tr>
         <td>Địa chỉ Email</td>
         <td><input type="text" name="email" /></td>
      </tr>
      <tr>
         <td>Mật khẩu</td>
         <td><input type="text" name="password" /></td>
      </tr>
      <tr>
         <td>Vai trò</td>
         <td><input type="text" name="role" /></td>
      </tr>
      
      <tr>
         <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm" /></td>
      </tr>
   </form>
   <?php 
      }
      ?>
</table>