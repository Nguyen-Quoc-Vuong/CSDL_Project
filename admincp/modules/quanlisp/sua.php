<?php 
$sql_sua_sp = "SELECT * FROM flight WHERE FlightID = '$_GET[idsanpham]' LIMIT 1"; 
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp); 
?>

<p>Sửa sản phẩm</p>
<table border="1px" width="100%" style="border-collapse: collapse;">
<?php 
    while($row = mysqli_fetch_array($query_sua_sp)) {
?>
    <form method="POST" action="modules/quanlisp/xuly.php?idsanpham=<?php echo $row['FlightID'] ?>" enctype="multipart/form-data">
    <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh" /></td>
        </tr>
        <tr>
            <td>Thời điểm đến</td>
            <td><input type="text" name="thoidiemden" /></td>
        </tr>
        <tr>
            <td>Thời điểm đi</td>
            <td><input type="text" name="thoidiemdi" /></td>
        </tr>
        <tr>
            <td>Điểm xuất phát</td>
            <td><input type="text" name="diemxuatphat" /></td>
        </tr>
        <tr>
            <td>Điểm đến</td>
            <td><input type="text" name="diemden" /></td>
        </tr>
        <tr>
            <td>Tổng thời gian</td>
            <td><input type="text" name="tongthoigian" /></td>
        </tr>
        <tr>
            <td>Giá vé</td>
            <td><input type="text" name="giave" /></td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td><input type="text" name="trangthai" /></td>
        </tr>
        <tr>
            <td>Ghi chú</td>
            <td><input type="text" name="ghichu" /></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
              <select name="danhmuc">
                <?php 
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC"; 
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc ); 
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']) {
                ?>
                <option selected value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php 
                } else {
                ?>
                <option value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php 
                    }
                }
                ?>
              </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
              <select name="tinhtrang">
                <?php 
                if($row['tinhtrang']==1) {
                ?>
                <option value = "1" selected>Kích hoạt</option>
                <option value = "0">Ẩn</option>
                <?php
                } else {
                ?>
                <option value = "1">Kích hoạt</option>
                <option value = "0"selected>Ẩn</option>
                <?php 
                }
                ?>
              </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm" /></td>
        </tr>
    </form>

    <?php 
    }
    ?>
</table>
