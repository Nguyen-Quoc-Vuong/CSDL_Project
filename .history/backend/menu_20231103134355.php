        <?php
            session_start();
            if (!isset($_SESSION["user"])) {
              header("Location: login.php");
           }
        ?>
        
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
  </head>
  <body>
    <div class="container-fluid">
        <form action="menu.php" method = "post"></form>
      <div class="row">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align: center; color : red;">
          <strong>WARNING! : 16 Tháng 10 2023, 23:00 GMT+7: </strong> Thay đổi kế hoạch khai thác tại các sân bay khu vực Bắc Trung Bộ và Trung Trung Bộ <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row1">
        <div class="col-md-4" style="display : flex">
          <img src="../asset/img/VNA_logo_vn.webp" alt="" style="height: 80px;width:50%">
          <img src="../asset/img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
        </div>
        <div class="col-md-6">
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
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Thông tin hành trình </a>
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
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Mua vé và sản phẩm khác </a>
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
    </div>
    <div class="container">
      <div class="col-md-2" style="display : flex" >
           <a href="login.php">LOG OUT
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
           </a>
      </div>
      </div>
    </div>

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
    <div class="line-wrapper">
      <div class="line"></div>
      <h4 class="text">Các chuyến bay của chúng tôi</h4>
      <div class="line"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 100%;">
            <img src="../asset/img/quangbinh.jpeg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Hà Nội - Phú Yên</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-primary">Chi tiết</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 100%;">
            <img src="../asset/img/dienbien.jpeg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hà Nội - Điện Biên</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-primary">Chi tiết</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 100%;">
            <img src="../asset/img/quêm.jpeg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Hà Nội - Gia Lai</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-primary">Chi tiết</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 100%;">
            <img src="../asset/img/hoacaido.jpeg" class="card-img-top img-thumbnail" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Hà Nội - Hoa Cải Đỏ</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-primary">Chi tiết</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top : 10px">
        <div class="col-md-3">
            <div class="card" style="width: 100%;">
              <img src="../asset/img/thanhhoa.jpeg" class="card-img-top img-thumbnail" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Hà Nội - Thanh Hóa</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-outline-primary">Chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 100%;">
              <img src="../asset/img/vinh.jpeg" class="card-img-top img-thumbnail" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Hà Nội - Vinh</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-outline-primary">Chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 100%;">
              <img src="../asset/img/quangninh.jpeg" class="card-img-top img-thumbnail" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Hà Nội - Quảng Ninh</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-outline-primary">Chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 100%;">
              <img src="../asset/img/câmuau.jpeg" class="card-img-top img-thumbnail" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Hà Nội - Cà Mau</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-outline-primary">Chi tiết</a>
              </div>
            </div>
          </div>
      </div>
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
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../asset/js/bootstrap.js"></script>
  </body>
</html>