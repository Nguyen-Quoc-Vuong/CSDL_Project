<div class="main">
<div class="container-fluid" style="margin-bottom: 20px;">
  <div class="row">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.vietnamairlines.com/~/media/Images/HeroBannerDestination/Vietnam/Herro%20banner/PHUQUOC/Hero%20banner/2600x900/VNA-Hero_Phu%20Quoc_2x_.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>HÈ NÀY ƯU ĐÃI 50% CHO CHUYẾN ĐI PHÚ QUỐC</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.vietnamairlines.com/~/media/Images/HeroBannerDestination/Japan/Tokyo/Hero%20banner/2600x900/VNA-Tokio-HeroBanner-2600x900.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.vietnamairlines.com/~/media/Images/HeroBannerDestination/Vietnam/Herro%20banner/DALAT/Hero%20banner/2600x900/Dalat_herobanner_cao_nguyen_lam_vien_2600x900.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
    <div class="maincontent">
        <?php
            if(isset($_GET['quanli'])) {
                $tam = $_GET['quanli']; 
            } else {
                $tam = ''; 
            }
            if($tam == 'thongtinhanhtrinh') {
                include("main/thongtinhanhtrinh.php"); 
            } elseif($tam=='muavevasanphamkhac'){
                include("main/muavevasanphamkhac.php"); 
            } else {
                include("main/index.php"); 
            }
        ?>
    </div>
<div class="line-wrapper">
  <div class="line"></div>
  <h4 class="text">Thông tin thêm</h4>
  <div class="line"></div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="https://www.vietnamairlines.com/~/media/Images/Highlight/Korea/HL-business.jpg" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Hạng thương gia</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-outline-primary">Đặt vé</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="https://www.vietnamairlines.com/~/media/Images/Highlight/Korea/HL-pre-eco.jpg" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Hạng phổ thông đặc biệt</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-outline-primary">Đặt vé</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 100%;">
        <img src="https://www.vietnamairlines.com/~/media/Images/Highlight/Korea/HL-entertainment.jpg" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Dịch vụ trên không</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-outline-primary">Đặt vé</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>