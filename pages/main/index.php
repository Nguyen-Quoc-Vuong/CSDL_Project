<style>
  .card {
    height: 100%; /* Set a fixed height for the card */
  }

  .card img {
    object-fit: cover; /* Ensure the image covers the entire container */
    height: 100%; /* Make the image fill the container height */
    width: 100%; /* Make the image fill the container width */
  }
</style>

<?php 
  $sql_pro = "SELECT * FROM flight, tbl_danhmuc where flight.id_danhmuc = tbl_danhmuc.id_danhmuc order by flight.FlightID DESC limit 10 "; 
  $query_pro = mysqli_query($mysqli, $sql_pro); 
?>
<div class="line-wrapper">
  <H1>THIS IS INDEX</H1>
  <div class="line"></div>
  <h4 class="text">Các chuyến bay của chúng tôi</h4>
  <div class="line"></div>
</div>
<div class="container">
  <div class="row">
    <?php  
      while($row = mysqli_fetch_array($query_pro)) {
    ?>
      <div class="col-md-3 mb-1">
        <div class="card">
          <?php 
          $ten_cot_tieu_de = isset($row['ten_cot_tieu_de']) ? $row['ten_cot_tieu_de'] : '';
          $ten_cot_noi_dung = isset($row['ten_cot_noi_dung']) ? $row['ten_cot_noi_dung'] : '';
          ?>
          <img src="admincp/modules/quanlisp/uploads/<?php echo $row['hinhanh'] ?>" class="card-img-top img-thumbnail" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $ten_cot_tieu_de; ?></h5>
            <p class="card-text"><?php echo $ten_cot_noi_dung; ?></p>
            <a href="#" class="btn btn-outline-primary">Chi tiết</a>
          </div>
        </div>
      </div>
    <?php 
      }
    ?>
  </div>
</div>
