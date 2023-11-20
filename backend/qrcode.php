<?php
session_start();
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
require_once "../helper/connect_dtb.php";

if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
if (isset($_SESSION['UserID'])) {
  $UserID = $_SESSION['UserID'];
}
$qr_image = "../img/qr.jpg"; 

if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
    $FlightID = $_SESSION['FlightID'];
    $numOfPassengers = (int)$_SESSION['numOfPass'];
    $amount = (int)$_SESSION['price'] ;
    $travelClass = $_SESSION['travelClass'];
    $currentPaymentID = $_SESSION['currentPaymentID'];
    $currentPassID = $_SESSION['currentPassID'];
    $currentBookingID = $_SESSION['currentBookingID'];
    $paymentMethodID = $_POST['paymentMethodID'];
    $paymentStatus = $_POST['option'];
    $_SESSION['paymentMethodID'] = $paymentMethodID;
    $_SESSION['paymentStatus'] = $paymentStatus;
}

?> 
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang QR code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #qr-container {
            width: 300px;
            height: 300px;
            margin: auto;
            background-color: white;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            display: <?php echo isset($_POST['pay']) ? 'block' : 'none'; ?>;
        }
        #qr-container img {
            width: 200px;
            height: 200px;
            display: block;
            margin: auto;
        }
        #qr-container p {
            text-align: center;
        }
        #qr-container button {
            display: inline-block;
            margin: 5px;
        }
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.8;
            z-index: 9;
            display: <?php echo isset($_POST['pay']) ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <form method="post" action="temp.php">
        <div id="overlay"></div>
        <div id='qr-container'>
            <img src='<?php echo $qr_image; ?>' alt='QR code'>
            <p>Số tài khoản: <?php echo 10000; ?></p>
            <button type='submit' name='back' class='btn btn-secondary'>Quay lại</button>
            <button type='submit' name='confirm' class='btn btn-primary'>Xác nhận</button>
        </div>
    </form>
</body>
</html>

