<div class="container">
  <div class="row row1">
    <div class="col-md-4" style="display : flex">
      <img src="img/VNA_logo_vn.webp" alt="" style="height: 80px;width:50%">
      <img src="img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
    </div>
    <!-- <div class="col-md-8">
      <nav class="navbar" style="background-color: #e3f2fd;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">DỊCH VỤ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Lên kế hoạch </a>
                  <ul class="dropdown-content">
                    <li>
                      <a class="dropdown-item" href="#">TP HCM</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Hà Nội</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Đà Nẵng</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Thông tin hành trình </a>
                  <ul class="dropdown-content">
                    <li>
                      <a class="dropdown-item" href="index.php?quanli=thongtinhanhtrinh">HANH TRINH</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Mua vé và sản phẩm khác </a>
                  <ul class="dropdown-content">
                    <li>
                      <a class="dropdown-item" href="index.php?quanli=muavevasanphamkhac">MUA VE</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tiện ích thương gia </a>
                  <ul class="dropdown-content">
                    <li>
                      <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </nav>
    </div>
  </div>
</div> -->

                <?php 
                $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC"; 
                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc ); 
                ?>
<div class ="col-md-8">
<div class = "menu">
        <ul class = "list_menu">
          <li><a href="index.php">Trang chủ</a></li>
          <?php 
           while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
          <li><a href="index.php?quanli=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?> "><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
          <?php 
           }
           ?>
          <li><a href="index.php?quanli=giohang">Giỏ hàng</a></li>
          <li><a href="index.php?quanli=giohang">Tin tức</a></li>
          <li><a href="index.php?quanli=giohang">Liên hệ</a></li>
        </ul>
      </div>
</div>
