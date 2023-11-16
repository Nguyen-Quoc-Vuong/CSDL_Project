<p>Thêm sản phẩm</p>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlisp/xuly.php" enctype="multipart/form-data">
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
                ?>
                <option value = "<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php 
                }
                ?>
              </select>
            </td>
        </tr>

        <!-- <tr>
            <td>Tình trạng</td>
            <td>
              <select name="tinhtrang">
                <option value = "1">Kích hoạt</option>
                <option value = "0">Ẩn</option>
              </select>
            </td>
        </tr> -->
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm" /></td>
        </tr>
    </form>
</table>
