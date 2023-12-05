<?php


if (isset($_SESSION['UserID'])) {
  $UserID = $_SESSION['UserID'];
} ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="css/viper.css">
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
      <title>TRAVELER - Free Travel Website Template</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="Free HTML Templates" name="keywords">
      <meta content="Free HTML Templates" name="description">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="container-fluid bg-light pt-3 d-none d-lg-block">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                  <div class="d-inline-flex align-items-center">
                     <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                     <p class="text-body px-3">|</p>
                     <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                  </div>
               </div>
               <div class="col-lg-6 text-center text-lg-right">
                  <div class="d-inline-flex align-items-center">
                     <a class="text-primary px-3" href="">
                     <i class="fab fa-facebook-f"></i>
                     </a>
                     <a class="text-primary px-3" href="">
                     <i class="fab fa-twitter"></i>
                     </a>
                     <a class="text-primary px-3" href="">
                     <i class="fab fa-linkedin-in"></i>
                     </a>
                     <a class="text-primary px-3" href="">
                     <i class="fab fa-instagram"></i>
                     </a>
                     <a class="text-primary pl-3" href="">
                     <i class="fab fa-youtube"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Topbar End -->
      <!-- Navbar Start -->
      <div class="container-fluid position-relative nav-bar p-0">
         <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
               <a href="" class="navbar-brand">
                  <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
               </a>
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                  <div class="navbar-nav ml-auto py-0">
                     <a href="index.html" class="nav-item nav-link active">Home</a>
                     <a href="#myFooter" class="nav-item nav-link">Contact</a>
                     <a href="../index.php" class="nav-item nav-link">Đăng xuẩt</a>
                     <a href=""class="nav-item nav-link">Lịch sử</a>
                     <!-- <a href=""></a> -->
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- Navbar End -->
      <!-- Carousel Start -->
      <div class="container-fluid p-0">
         <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="w-100" src="../img/carousel-1.jpg" alt="Image">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="w-100" src="../img/carousel-2.jpg" alt="Image">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                        
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
               <div class="btn btn-dark" style="width: 45px; height: 45px;">
                  <span class="carousel-control-prev-icon mb-n2"></span>
               </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
               <div class="btn btn-dark" style="width: 45px; height: 45px;">
                  <span class="carousel-control-next-icon mb-n2"></span>
               </div>
            </a>
         </div>
      </div>
      <!-- Carousel End -->

         <!-- Booking Start -->

    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
              <form method="post" action="muave.php">
                
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-2">
                        <div class="row">
                        <label for="roundTrip">
                            <input type="radio" id="roundTrip" name="tripType" value="roundTrip">
                                Khứ hồi
                        </label>
                        <label for="oneWay">
                            <input type="radio" id="oneWay" name="tripType" value="oneWay">
                                Một chiều
                        </label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="departureCity" name="departureCity" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Departure City</option>
                                          <?php
                                          try {
                                              require_once "../helper/connect_dtb.php";
                                              $sql = "SELECT DISTINCT city FROM cities WHERE 1";
                                              $result = mysqli_query($conn, $sql);
                                              $i = 0;
                                              if (mysqli_num_rows($result) > 0) {
                                                  while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                      <option value="<?= $row['city'] ?>"><?php echo $row['city'] ?></option>
                                                      <?php
                                                  }
                                              }
                                              } catch (Exception $e) {
                                                  echo $e -> getMessage();
                                              }
                                          ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="arrivalCity" name="arrivalCity" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Arrival City</option>
                                          <?php
                                          try {
                                              require_once "../helper/connect_dtb.php";
                                              $sql = "SELECT DISTINCT city FROM cities WHERE 1";
                                              $result = mysqli_query($conn, $sql);
                                              $i = 0;
                                              if (mysqli_num_rows($result) > 0) {
                                                  while ($row = mysqli_fetch_array($result)) {
                                                      ?>
                                                      <option value="<?= $row['city'] ?>"><?php echo $row['city'] ?></option>
                                                      <?php
                                                  }
                                              }
                                              } catch (Exception $e) {
                                                  echo $e -> getMessage();
                                              }
                                          ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <!-- <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div> -->
                                    <input type="text" id="departureDate" name="departureDate" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" onfocus="(this.type='date')" onblur="(this.type='text')" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <!-- <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div> -->          
                                  <input type="text" id="returnDate" name="returnDate" class="form-control p-4 datetimepicker-input" placeholder="Return Date" onfocus="(this.type='date')" onblur="(this.type='text')" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                  <input type="number" id="passengers" name="passengers" min="1" class="form-control p-4" style="height: 47px;" required placeholder="Passengers">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="seatingPreference" name="seatingPreference" class="custom-select px-4" style="height: 47px;" required>
                                        <option>Seating Preference</option>
                                        <?php
                                          try {
                                            require_once "../helper/connect_dtb.php";
                                            $sql = "SELECT DISTINCT travelClassCode FROM travelclass WHERE 1";
                                            $result = mysqli_query($conn, $sql);
                                            $i = 0;
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?php echo $row['travelClassCode'];?>"><?php echo $row['travelClassCode'] ?></option>
                                                    <?php
                                                }
                                            }
                                            } catch (Exception $e) {
                                                echo $e -> getMessage();
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Search</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    <!-- Booking End -->

      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      <script src="../lib/easing/easing.min.js"></script>
      <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="../lib/tempusdominus/js/moment.min.js"></script>
      <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
      <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Contact Javascript File -->
      <script src="../mail/jqBootstrapValidation.min.js"></script>
      <script src="../mail/contact.js"></script>
      <!-- Template Javascript -->
      <script src="../js/main.js"></script>
      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
      <div class="wrapper"> </div>
      <div class="container py-4">
         <div class="row">
            <div class="col-md-12 my-2">
               <p class="section-title my-3chu" title="Aviation partner">Aviation partner</p>
               <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/bamboo.png" alt="Bamboo Airways">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/VietnamAirlines.jpg" alt="VietNam Airlines">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/vietjet.png" alt="vietjet">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/cathay.png" alt="Cathay">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/korean.png" alt="Korean Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/delta.png" alt="Delta Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/china-airlines.png" alt="China Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/philippine-airlines.png" alt="Philippine Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/thai.png" alt="Thai Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/jetstar.png" alt="JetStar Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/eva-air.png" alt="Eva Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/emirates.png" alt="Emirates Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/american-airlines.png" alt="American Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/ana.png" alt="Ana Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/united-airlines.png" alt="United Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/japan.png" alt="Japan Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/quatar.png" alt="Quatar Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/malaysia.png" alt="Malaysia Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/air-france.png" alt="France Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/air-canada.png" alt="Canada Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/turkish-airlines.png" alt="Turkish Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/hong-kong.png" alt="HongKong Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/china-southen.png" alt="China Southen Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/china-eastern.png" alt="China Eastern Airline">
                  </div>
                  <div class="partner-item mb-md-3 mr-3">
                     <img src="https://www.vemaybay.vn/images/air-china.png" alt="China Airline">
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 my-2">
               <p class="section-title my-3chu" title="Hotel partners">Hotel partners</p>
               <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/Vinpearl.png" alt="Vinpearl">
                  </div>
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/MuongThanh.png" alt="Mường Thanh">
                  </div>
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/Furama.png" alt="Furama">
                  </div>
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/Pullma.png" alt="Pullman">
                  </div>
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/hotel-partner-5.png" alt="The Anam">
                  </div>
                  <div class="partner-item mb-md-3 mr-4">
                     <img src="https://www.vemaybay.vn/images/hotel-partner-6.png" alt="The Beach">
                  </div>
               </div>
            </div>
            <div class="col-md-4 my-2">
               <p class="section-title my-3" title="Payment partner">Payment partner</p>
               <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                  <div class="partner-item mb-md-3 mr-4 mr-md-2">
                     <img src="../icon/ncb.png" width="80" alt="NCB">
                  </div>
                  <div class="partner-item mb-md-3 mr-4 mr-md-2">
                     <img src="../icon/vnpay.jpg" width="80" alt="Vnpay">
                  </div>
                  <div class="partner-item mb-md-3 mr-4 mr-md-2">
                     <img src="../icon/agribank.png" width="80" alt="Argibank">
                  </div>
                  <div class="partner-item mb-md-3 mr-4 mr-md-2">
                     <img src="../icon/vietcombank.png" width="80" alt="Vietcombank">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="myFooter" class="container-fluid" style="margin-top : 30px"> 
         <?php
            include("footer.php") ;  
            ?>
      </div>
      <!-- <script src="config/footer.js"></script> -->
      <script src="https://code.jquery.com/jquery-latest.js"></script>
      <script src="../popper.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
   </body>
</html>
<style>
   .partner-item {
   flex: 0 0 12.5%;
   /* Chia ra 8 phần trên mỗi dòng */
   max-width: 12.5%;
   /* Độ rộng tối đa của mỗi logo */
   }
   .partner-item img {
   max-width: 100%;
   /* Đảm bảo logo hiển thị đúng kích thước */
   height: auto;
   display: block;
   margin: 0 auto;
   }
   /* Loại bỏ padding và margin của row */
   .row {
   margin: 0;
   padding: 0;
   }
   .section-title {
   font-size: 1.8rem;
   font-family: Montserrat;
   }
   .my-3chu {
   margin-left: 30px;
   }
   .description {
   background-color: #364744;
   color: white;
   padding: 30px 0;
   max-width: 100%;
   }

   .booking {
    position: relative;
    margin-top: -60px !important;
    z-index: 1;
}

   .mb-md-4 {
      margin-bottom: 22.5rem!important;
   } 
</style>