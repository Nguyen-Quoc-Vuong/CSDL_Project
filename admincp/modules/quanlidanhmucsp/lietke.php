<?php 
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC"; 
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp); 
?>
<div class="container">
  <h2 class="text-center">Liệt kê danh mục vé</h2>
  <table class="newtable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lí</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i =0 ;
      while($row = mysqli_fetch_array($query_lietke_danhmucsp)) { 
          $i++ ; 
      ?>
          <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $row['tendanhmuc']?></td>
              <td>
                  <!-- Thêm hàm onclick cho nút xóa -->
                  <a href="modules/quanlidanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                  <a href="?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>" class="btn btn-primary">Sửa</a> 
              </td>
          </tr>
      <?php 
      }
      ?>
    </tbody>
  </table>
</div>

<style>
    /* Định dạng bảng */
    table.newtable {
        border: 1px solid black; /* Độ dày đường viền */
        border-collapse: collapse; /* Loại bỏ khoảng trống giữa các đường viền */
        border-spacing: 0; /* Khoảng cách giữa các đường viền */
        width: 100%; /* Chiều rộng của bảng */
        max-width: 900px; /* Chiều rộng tối đa của bảng */
        margin: 0 auto; /* Căn giữa bảng */
    }

    /* Định dạng các ô của bảng */
    table.newtable th, table.newtable td {
        border: 1px solid black; /* Độ dày đường viền */
        padding: 10px; /* Khoảng trống bên trong ô */
        text-align: center; /* Căn giữa nội dung ô */
    }

    /* Định dạng các ô của phần đầu bảng */
    table.newtable th {
        background-color: #f0f0f0; /* Màu nền */
        font-weight: bold; /* In đậm chữ */
    }

    /* Định dạng các ô của phần thân bảng */
    table.newtable td {
        background-color: #ffffff; /* Màu nền */
    }

    /* Định dạng các ô của các hàng chẵn */
    table.newtable tr:nth-child(even) td {
        background-color: #f9f9f9; /* Màu nền */
    }

    /* Định dạng các nút */
    .btn {
        display: inline-block; /* Hiển thị nội tuyến */
        padding: 5px 10px; /* Khoảng trống bên trong nút */
        text-decoration: none; /* Loại bỏ gạch chân */
        color: white; /* Màu chữ */
        border-radius: 5px; /* Bán kính bo góc */
    }

    /* Định dạng nút xóa */
    .btn-danger {
        background-color: #dc3545; /* Màu nền */
    }

    /* Định dạng nút sửa */
    .btn-primary {
        background-color: #007bff; /* Màu nền */
    }
</style>
