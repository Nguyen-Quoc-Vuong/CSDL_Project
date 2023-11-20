<?php 
    $sql_lietke_sp = "SELECT * FROM flight, tbl_danhmuc where flight.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY 	
    FlightID  DESC"; 
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp); 
?>
<h2 style="text-align: center; color: #0098D8;">Liệt kê danh mục chuyến </h2>
<table class="viptable" style = " width:100%" border="1" style ="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Hình ảnh</th>
    <th>Thời điểm đến</th>
    <th>Thời điểm đi</th>
    <th>Điểm xuất phát</th>
    <th>Điểm đến</th>
    <th>Tổng thời gian</th>
    <th>Giá vé</th>
    <th>Trạng thái</th>
    <th>Ghi chú</th>
    <th>Quản lí</th>
</tr>
<?php
$i =0 ;
while($row = mysqli_fetch_array($query_lietke_sp)) { 
    $i++ ; 
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh']?>" width = "150px"></td>
        <td><?php echo  $row['thoidiem_den']  ?></td> 
        <td><?php echo ($row['thoidiem_di'])  ?></td>
        <td><?php echo ($row['diem_xuatphat'])  ?></td>
        <td><?php echo ($row['diem_den'])  ?></td>
        <td><?php echo ($row['tong_thoi_gian'])  ?></td>
        <td><?php echo ($row['gia_ve'])  ?></td>
        <td><?php echo ($row['trang_thai'])  ?></td>
        <td><?php echo ($row['ghi_chu'])  ?></td>
        <td>
    <a href="modules/quanlisp/xuly.php?idsanpham=<?php echo $row['FlightID']?>"class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a> 
    <a href="?action=quanlisp&query=sua&idsanpham=<?php echo $row['FlightID']?>"class="btn btn-primary">Sửa</a> 
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