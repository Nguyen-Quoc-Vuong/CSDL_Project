<?php 
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql_pro = "SELECT * FROM tbl_danhmuc,  flight WHERE tbl_danhmuc.id_danhmuc = flight.id_danhmuc AND flight.id_danhmuc = $id ORDER BY flight.FlightID DESC"; 
  $query_pro = mysqli_query($mysqli, $sql_pro);  

  // Lấy thông tin của dòng đầu tiên
  $row_title = mysqli_fetch_array($query_pro);

  // Đặt lại con trỏ dữ liệu về dòng đầu tiên
  mysqli_data_seek($query_pro, 0);
}
?>
<h3>this is danh muc: <?php echo isset($row_title['tendanhmuc']) ? $row_title['tendanhmuc'] : ''; ?></h3>
<div class="container">
  <?php 
  if(isset($query_pro)) {
    while($row_pro = mysqli_fetch_array($query_pro)) {
  ?>
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 100%;">
          <?php 
          $ten_cot_tieu_de = isset($row_pro['ten_cot_tieu_de']) ? $row_pro['ten_cot_tieu_de'] : '';
          $ten_cot_noi_dung = isset($row_pro['ten_cot_noi_dung']) ? $row_pro['ten_cot_noi_dung'] : '';
          ?>
          <img src="admincp/modules/quanlisp/uploads/<?php echo $row_pro['hinhanh'] ?>" class="card-img-top img-thumbnail" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $ten_cot_tieu_de; ?></h5>
            <p class="card-text"><?php echo $ten_cot_noi_dung; ?></p>
            <a href="#" class="btn btn-outline-primary">Chi tiết</a>
          </div>
        </div>
      </div>
    </div>
  <?php 
    }
  } else {
    echo "Không có dữ liệu.";
  }
  ?>
</div>
