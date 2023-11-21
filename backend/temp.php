<?php
session_start();
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
require_once "../helper/connect_dtb.php";
if (isset($_SESSION['UserID'])) {
    $UserID = $_SESSION['UserID'];
    $FlightID = $_SESSION['FlightID'];
    $numOfPassengers = (int)$_SESSION['numOfPass'];
    $amount = (int)$_SESSION['price'] ;
    $travelClass = $_SESSION['travelClass'];
    $currentPaymentID = $_SESSION['currentPaymentID'];
    $currentPassID = $_SESSION['currentPassID'];
    $currentBookingID = $_SESSION['currentBookingID'];
    $paymentMethodID = $_SESSION['paymentMethodID'];
    $paymentStatus = $_SESSION['paymentStatus'];
    $id_danhmuc = $_SESSION['id_danhmuc'];
}
//add data to payment   
    if($paymentStatus == 'full') {
        $paymentStatusID = 1;
    } else {
        $paymentStatusID = 2;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('YYYY-MM-DD hh:mm:ss', time());

    $currentPaymentID++;
    $sql = "INSERT INTO `payment` (`PaymentID`, `PaymentDate`, `PaymentMethodID`, `PaymentAmount`, `PaymentStatusID`) VALUES ($currentPaymentID, '$date', '$paymentMethodID', '$amount', '$paymentStatusID');";
    $result = mysqli_query($conn, $sql);
    
    $currentBookingID++;
    for($i = 1; $i <= $numOfPassengers; $i++) {
        $currentPassID++;
        if ($travelClass = 'Thương gia') {
            $travelClassID = 2;
        } else {
            $travelClassID = 1;
        }
        $sql = "INSERT INTO `booking` (`BookingID`, `BookingDate`, `PassengerID`, `BookingStatusID`, `id_danhmuc`, `FlightID`, `TravelClassID`, `PaymentID`) VALUES ('$currentBookingID', '$date', '$currentPassID', '4', '$id_danhmuc', '$FlightID', '$travelClassID', '$currentPaymentID');";
        echo $sql.'<br>';
        $result = mysqli_query($conn, $sql);
    }
    header("Location: menu.php");
?>