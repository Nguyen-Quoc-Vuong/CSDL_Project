<?php
    session_start();
    if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    }
    if (isset($_SESSION['UserID'])) {
        $UserID = $_SESSION['UserID'];
    } 

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../css/viper.css">
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
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div id="#myHeader" class="container-fluid bg-light pt-3 d-none d-lg-block">
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
                     <a href="../index1.php" class="nav-item nav-link active">Home</a>
                     <a href="#myFooter" class="nav-item nav-link">Contact</a>
                     <a href="#myHeader"class="nav-item nav-link">Lịch sử</a>
                     <a href="index.php" class="nav-item nav-link">Đăng xuẩt</a>
                     <!-- <a href=""></a> -->
                  </div>
               </div>
            </nav>
         </div>
      </div>

      <?php
    
        require_once "../helper/connect_dtb.php";
        $sql = "SELECT* FROM booking
        JOIN passenger ON booking.PassengerID = passenger.PassengerID
        JOIN bookingstatus ON bookingstatus.BookingStatusID = booking.BookingStatusID
        JOIN tbl_danhmuc ON booking.id_danhmuc = tbl_danhmuc.id_danhmuc
        JOIN flight ON booking.FlightID = flight.FlightID
        JOIN travelclass ON booking.TravelClassID = travelclass.TravelClassID
        JOIN payment ON booking.PaymentID = payment.PaymentID
        JOIN users ON payment.UserID = users.UserID
        ORDER BY booking.BookingDate";
        
        $result = mysqli_query($conn, $sql);

?>
    <h2 style="text-align: center; color: #0098D8;">Lịch sử mua hàng </h2>
<table class="viptable" style = " width:100%" border="1" style ="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Ngày đặt</th>
    <th>Khách hàng</th>
    <th>Trạng thái</th>
    <th>Loại vé</th>
    <th>Thời điểm đi</th>
    <th>Thời điểm đến</th>
    <th>Điểm xuất phát</th>
    <th>Điểm đến</th>
    <th>Hạng</th>
    <th>Chi phí</th>
</tr>

    <?php
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo  $row['BookingDate']  ?></td> 
        <td><?php echo ($row['namePassenger'])  ?></td>
        <td><?php echo ($row['BookingStatusCode'])  ?></td>
        <td><?php echo ($row['tendanhmuc'])  ?></td>
        <td><?php echo ($row['thoidiem_di'])  ?></td>
        <td><?php echo ($row['thoidiem_den'])  ?></td>
        <td><?php echo ($row['diem_xuatphat'])  ?></td>
        <td><?php echo ($row['diem_den'])  ?></td>
        <td><?php echo ($row['TravelClassCode'])  ?></td>
        <td><?php echo ($row['PaymentAmount'])  ?></td>
        <td>
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


      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/tempusdominus/js/moment.min.js"></script>
      <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
      <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Contact Javascript File -->
      <script src="mail/jqBootstrapValidation.min.js"></script>
      <script src="mail/contact.js"></script>
      <!-- Template Javascript -->
      <script src="js/main.js"></script>
      <!-- Back to Top -->
      
      <div id="myFooter" class="container-fluid" style="margin-top : 30px"> 
         <?php
            include("footer.php") ;  
            ?>
      </div>

              
              
              
    