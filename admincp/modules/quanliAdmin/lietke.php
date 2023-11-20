<?php 
    $sql_lietke_sp = "SELECT * FROM users where role = 1 ORDER BY 	
    UsersID "; 
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp); 
?>
<h2 style="text-align: center; color: #0098D8;">CÁC ADMIN</h2>
<table class="viptable" style = " width:100%" border="1" style ="border-collapse: collapse;">
<tr>
    <th>Thứ tự</th>
    <th>Họ và tên</th>
    <th>Địa chỉ email</th>
    <th>Mật khẩu</th>
    <th>Vai trò</th>
    <th>Xử lí</th>
<?php
$i =0 ;
while($row = mysqli_fetch_array($query_lietke_sp)) { 
    $i++ ; 
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo ($row['fullname'])  ?></td>
        <td><?php echo ($row['email'])  ?></td>
        <td><?php echo ($row['password'])  ?></td>
        <td><?php echo ($row['role'])  ?></td>
        <td>
        <a href="modules/quanliAdmin/xuly.php?idsanpham=<?php echo $row['UsersID']?>"class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
        </td>
    </tr>
<?php 
}
?>
</table>
<style>
    table.viptable th,table.viptable td {
        text-align: center;
    }
</style>