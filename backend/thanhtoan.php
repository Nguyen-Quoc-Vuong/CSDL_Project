<link rel="stylesheet" href="../asset/css/style.css">
<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
  }
?>
<?php
require_once "../helper/connect_dtb.php";
// echo count($_POST)/5;
$listAddSql = array();
//require_once 'nhapthongtin.php';

//insert data into passenger table
if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
    $FlightID = $_SESSION['FlightID'];
    $numOfPassengers = (int)$_SESSION['numOfPass'];
    $amount = (int)$_SESSION['price'] ;
    $travelClass = $_SESSION['travelClass'];
    $currentPassID = $_SESSION['currentPassID'];
  }
if (isset($_POST)) {
    $numOfPassenger = count($_POST)/5;
    for($i = 1; $i <= $numOfPassenger; $i++) {
        $name = $_POST['name'.$i];
        $phone = $_POST['phone'.$i];
        $address = $_POST['address'.$i];
        $city = $_POST['city'.$i];
        $country = $_POST['country'.$i];
        
        $currentPassID++;
        $sql = "INSERT INTO `passenger` (`PassengerID`, `namePassenger`, `sdt`, `address`, `city`, `country`, `UserID`) 
        VALUES ($currentPassID, '$name', '$phone', '$address', '$city', '$country', '$UserID');";
        
        $result = mysqli_query($conn, $sql);    
    }
}
?>

<!DOCTYPE html>
<html>
   <head>
      <!-- <title>Đăng Nhập</title> -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <script src="../library/jquery/jquery.min.js"></script>
      <link rel="shortcut icon" href="../icon/favicon.ico">
      <link rel="stylesheet" type="text/css" href="../style/header.css">
      <link rel="stylesheet" type="text/css" href="../style/footer.css">
      <link rel="stylesheet" href="../library/sweetalert2/dist/sweetalert2.min.css">
      <link rel="stylesheet" type="text/css" href="../style/Login-Register.css">
      <!-- Thêm đoạn mã CSS này để tùy chỉnh giao diện trang thanh toán -->
      <style>
         .form-box {
            /* Căn giữa form-box trong container */
            margin: 0 auto;
            /* Thiết lập chiều rộng và chiều cao cho form-box */
            width: 80%;
            height: 80%;
            /* Thêm đường viền và bo góc cho form-box */
            border: 1px solid #ccc;
            border-radius: 10px;
            /* Thêm đệm và nền cho form-box */
            padding: 20px;
            background-color: #fff;
         }
         h1 {
            /* Căn giữa tiêu đề trang thanh toán */
            text-align: center;
            /* Thiết lập kích thước và màu sắc cho tiêu đề */
            font-size: 36px;
            color: #00a0e9;
            /* Thêm độ rộng và độ cao cho tiêu đề */
            width: 100%;
            height: 10%;
         }
         .form-group {
            /* Thiết lập chiều rộng và chiều cao cho các nhóm trường nhập */
            width: 50%;
            height: 10%;
            /* Căn giữa các nhóm trường nhập trong form-box */
            margin: 0 auto;
         }
         label {
            /* Thiết lập kích thước và màu sắc cho nhãn */
            font-size: 30px;
            color: #00a0e9;
            font-family: segoe ui light;
         }
         select {
            /* Thiết lập kích thước và màu sắc cho hộp chọn */
            font-size: 25px;
            color: #333;
            /* Thêm độ rộng và độ cao cho hộp chọn */
            width: 196%;
            height: 100%;
            margin-left: -160px;
            text-align: center;
         }
         button {
            /* Thiết lập kích thước và màu sắc cho nút thanh toán */
            font-size: 27px;
            color: #fff;
            background-color: #00a0e9;
            /* Thêm độ rộng và độ cao cho nút thanh toán */
            width: 54%;
            height: 100%;
            /* Thêm đường viền và bo góc cho nút thanh toán */
            border: none;
            border-radius: 5px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <nav class="nav-bar"></nav>
         <div class="form-box">
            <!-- <div class="button-box">
               <div id="slider" class="slider"></div>
               
            </div> -->
    
                    <h1>Thanh toán tại đây</h1>
                    <br>
                    <br>
                    <h2>Bạn cần thanh toán số tiền là: <?php echo $amount; ?> đồng</h2>
                    <br>
                    <hr style="border: 2px solid #808080; ">
                    <form method="post" action="qrcode.php">
                        <div class="form-group">
                           <br>
                            <label for="option">Phương thức thanh toán:</label>
                            <br>
                            <br>
                            <select name="option" id="option" class="form-control">
                                <option value="full" style="width : 150%">Thanh toán toàn bộ tiền</option>
                                <option value="part"style="width : 150%">Thanh toán 1 phần tiền (50%)</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                           <br>  
                           <br>
                            <input name='price' type='hidden' value =<?php echo $amount; ?>>
                            <input name='paymentMethodID' type='hidden' value ='2'>
                            <input name='FlightID' type='hidden' value=<?php echo $FlightID ?>>
                            <button type="submit" name="pay" class="btn btn-primary">Thanh toán</button>
                        </div>
                    </form>
                <!-- </div> -->
         </div>
      </div>
      <div class="description"></div>
      <script src="../config/HeaderFooter.js"></script>
      <script src="../library/sweetalert2/dist/sweetalert2.min.js"></script>
      <script type="module" src="../config/LoginRegister.js"></script>
      <script src="../config/UserState.js"></script>
   </body>
</html>
