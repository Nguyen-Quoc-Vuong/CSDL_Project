<?php 
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC"; 
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp); 
?>
<p>Liet ke danh muc san pham</p>
<table style = " width:100%" border="1" style ="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lí</th>
</tr>
<?php
$i =0 ;
while($row = mysqli_fetch_array($query_lietke_danhmucsp)) { 
    $i++ ; 
?>
    <tr>
        <td><?php echo $i ?></td>
      <td><?php echo $row['tendanhmuc']?></td>
      <td>
        <a href="modules/quanlidanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> 
      </td>
    </tr>
<?php 
}
?>
</table>