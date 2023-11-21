<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
if (isset($_SESSION['UserID'])) {
  $UserID = $_SESSION['UserID'];
}
?>
<link rel="stylesheet" href="../asset/css/muave.css">
<link rel="stylesheet" href="../asset/css/style.css">

<?php
          //list available flight 
            $listOfFlight = array(array());

            require_once "../helper/connect_dtb.php";
            $sql = "SELECT COUNT(PassengerID) as num FROM `passenger` WHERE 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $currentPassID = $row['num'];
            $_SESSION['currentPassID'] = $currentPassID;

            $sql = "SELECT count(PaymentID) as num FROM `payment` WHERE 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $currentPaymentID = $row['num'];
            $_SESSION['currentPaymentID'] = $currentPaymentID;

            $sql = "SELECT count(DISTINCT BookingID) as num FROM `booking` WHERE 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $currentBookingID = $row['num'];
            $_SESSION['currentBookingID'] = $currentBookingID;

            $diem_xuatphat = $_POST['departureCity'];
            $diem_den = $_POST['arrivalCity'];
            $thoidiem_den = date("Y/m/d",strtotime($_POST['returnDate']));
            $thoidiem_di = $_POST['departureDate'];
            $numOfPass = $_POST['passengers'];
            $travelClass = $_POST['seatingPreference'];

            $_SESSION['numOfPass'] = $numOfPass;
            $_SESSION['travelClass'] = $travelClass;

            if(isset($_POST['tripType'])) {
              $_SESSION['tbl_danhmuc'] = $_POST['tripType']; 
            }


            $sql = "SELECT FlightID FROM flight 
            WHERE diem_den = \"$diem_den\"
            AND diem_xuatphat = \"$diem_xuatphat\"
            AND thoidiem_den <= \"$thoidiem_den 00:00:00\"
            AND thoidiem_di >= \"$thoidiem_di 23:59:59\";";
            $result = mysqli_query($conn, $sql);

            ?>
            <table class="table">
              <thead>
                <tr class="text-center">
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Status</th>
                  <th scope="col">Fare</th>
                  <th scope="col">Buy</th>
                </tr>
              </thead>
              <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                //dem so ve 
                $FlightID = $row['FlightID'];
                
                $sql1 = "SELECT COUNT(*) as num FROM booking JOIN travelclass WHERE booking.FlightID = \"$FlightID\" AND travelclass.TravelClassCode = \"$travelClass\";";
                $soldTicket = mysqli_query($conn, $sql1);
                $num = (int)mysqli_fetch_array($soldTicket)['num'];

                //so ve toi da ung voi travelclass
                $sql2 = "SELECT so_ve FROM travelclass WHERE TravelClassCode = \"$travelClass\"; ";
                $capacity = mysqli_query($conn, $sql2);
                $numOfSeats = (int)mysqli_fetch_array($capacity)['so_ve'];
                
                //neu ve chua full
                if ($numOfSeats - $num >= $numOfPass) {
                  //tao form cho user pick
                    //lay thong tin ve flight
                    $sql3 = "SELECT * FROM flight WHERE FlightID = \"$FlightID\";";
                    $info = mysqli_query($conn, $sql3);
                    $flightInfo = mysqli_fetch_array($info);
                    $price = $flightInfo['gia_ve'];
                    $status = $flightInfo['trang_thai'];
                    $arrival_time = $flightInfo['thoidiem_den'];
                    $departure_time = $flightInfo['thoidiem_di'];
                    array_push($listOfFlight, array('FlightID'=>$FlightID,'travelClass'=>$travelClass));
                    
                    echo "
                    <tr class='text-center'>                  
                      <td>".$departure_time."</td>
                      <td>".$arrival_time."</td>
                      <td>$status</td>   
                      <td>$ ".$price."</td>
                    ";
                    
                    echo " <td>
                    <form action='nhapthongtin.php' method='post'>
                      <input name='FlightID' type='hidden' value=".$FlightID.">
                      <input name='numOfPass' type='hidden' value=".$numOfPass.">
                      <input name='price' type='hidden' value=".$price.">
                      <input name='ret_date' type='hidden' value=".$thoidiem_den.">
                      <input name='travelClass' type='hidden' value=".$travelClass.">
                      <input name='tripType' type='hidden' value=".$_POST['tripType'].">
                      <button name='book_but' type='submit' 
                      class='btn btn-success mt-0'>
                      </button>
                    </form>
                    </td>    
                    </tr>                                                   
                    ";
                }
              }
            }
            ?>
            </tbody>
            </table>
