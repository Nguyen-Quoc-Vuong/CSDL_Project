

<!-- <?php
          //list available flight 
            try {
              $listOfFlight = array(array());

              require_once "../helper/connect_dtb.php";
              $diem_xuatphat = $_POST['departureCity'];
              $diem_den = $_POST['arrivalCity'];
              $thoidiem_den = date("Y/m/d",strtotime($_POST['returnDate']));
              $thoidiem_di = $_POST['departureDate'];

              $sql = "SELECT FlightID FROM flight 
              WHERE diem_den = \"$diem_den\"
              AND diem_xuatphat = \"$diem_xuatphat\"
              AND thoidiem_den <= \"$thoidiem_den 00:00:00\"
              AND thoidiem_di >= \"$thoidiem_di 23:59:59\";";

              // echo $sql;
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  //dem so ve 
                  $FlightID = $row['FlightID'];
                  $travelClass = $_POST['seatingPreference'];
                  $sql1 = "SELECT COUNT(*) as num FROM booking JOIN travelclass WHERE booking.FlightID = \"$FlightID\" AND travelclass.TravelClassCode = \"$travelClass\";";
                  $soldTicket = mysqli_query($conn, $sql1);
                  $num = (int)mysqli_fetch_array($soldTicket)['num'];

                  //so ve toi da ung voi travelclass
                  $sql2 = "SELECT so_ve FROM travelclass WHERE TravelClassCode = \"$travelClass\"; ";
                  $capacity = mysqli_query($conn, $sql2);
                  $numOfSeats = (int)mysqli_fetch_array($capacity)['so_ve'];
                  
                  //neu ve chua full
                  if ($num < $numOfSeats) {
                    //tao form cho user pick
                      //lay thong tin ve flight
                      $sql3 = "SELECT * FROM flight WHERE FlightID = \"$FlightID\";";
                      $info = mysqli_query($conn, $sql3);
                      $flightInfo = mysqli_fetch_array($info);
                      array_push($listOfFlight, array('FlightID'=>$FlightID,'travelClass'=>$travelClass));
                  }
                }
              }
              echo '<pre>';
              print_r($listOfFlight);
              echo '</pre>';
              // setcookie('listOfFlight',$listOfFlight, 86400, '/');

            }catch(Exception $e) {
              echo $e->getMessage();
            }
          ?> -->

<?php
// setcookie('FlightID','123',time()- 86400);
// setcookie('username', 'John Doe', time()- 3600);

  try {
    if(isset($_POST['myInput'])) {
      setcookie('FlightID',$FlightID,86400,'/');
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }

//setcookie('travelClass',$travelClass,86400,'/');
//}
echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Information</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <div class="container">
      <div class="flight-information">
        <h1>Flight Information</h1>

        <div class="card">
          <div class="card-header">Flight Details</div>
          <div class="card-body">

          <?php
          //list available flight 
            try {
              require_once "../helper/connect_dtb.php";
              $diem_xuatphat = $_POST['departureCity'];
              $diem_den = $_POST['arrivalCity'];
              $thoidiem_den = date("Y/m/d",strtotime($_POST['returnDate']));
              $thoidiem_di = $_POST['departureDate'];

              echo '<br>';

              $sql = "SELECT FlightID FROM flight 
              WHERE diem_den = \"$diem_den\"
              AND diem_xuatphat = \"$diem_xuatphat\"
              AND thoidiem_den <= \"$thoidiem_den 00:00:00\"
              AND thoidiem_di >= \"$thoidiem_di 23:59:59\";";

              // echo $sql;

              $result = mysqli_query($conn, $sql);

              echo '<br>';
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  //dem so ve 
                  $FlightID = $row['FlightID'];
                  
                  $travelClass = $_POST['seatingPreference'];
                  $sql1 = "SELECT COUNT(*) as num FROM booking JOIN travelclass WHERE booking.FlightID = \"$FlightID\" AND travelclass.TravelClassCode = \"$travelClass\";";
                  $soldTicket = mysqli_query($conn, $sql1);
                  $num = (int)mysqli_fetch_array($soldTicket)['num'];

                  //so ve toi da ung voi travelclass
                  $sql2 = "SELECT so_ve FROM travelclass WHERE TravelClassCode = \"$travelClass\"; ";
                  $capacity = mysqli_query($conn, $sql2);
                  $numOfSeats = (int)mysqli_fetch_array($capacity)['so_ve'];
                  
                  //neu ve chua full
                  if ($num < $numOfSeats) {
                    //tao form cho user pick
                      //lay thong tin ve flight
                      $sql3 = "SELECT * FROM flight WHERE FlightID = \"$FlightID\";";
                      $info = mysqli_query($conn, $sql3);
                      $flightInfo = mysqli_fetch_array($info);           
                    
                    ?>
                    <?php
                      if(isset($_POST['sumbit'])) {
                        session_start();
                        $_SESSION["FlightID"] = $FlightID;
                        header("Location: temp.php");
                        die();
                      }
                    ?>
                    <form method ="post" action= "muave.php">
                    
                    <div class="tab-pane fade" id="flight-pane">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title">Flight VN</h5>
                        </div>
                        <div class="card-body">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <td>Departure airport</td>
                                <td><?php echo $diem_xuatphat?></td>
                              </tr>
                              <tr>
                                <td>Arrival airport</td>
                                <td><?php echo $diem_den?></td>
                              </tr>
                              <tr>
                                <td>Departure time</td>
                                <td><?php echo $flightInfo['thoidiem_di']?></td>
                              </tr>
                              <tr>
                                <td>Arrival time</td>
                                <td><?php echo $flightInfo['thoidiem_den']?></td>
                              </tr>
                              <tr>
                                <td>Duration</td>
                                <td><?php echo 'thoi gian di'?></td>
                              </tr>
                              <tr>
                                <td>Price</td>
                                <td><?php echo $flightInfo['gia_ve']?></td>
                              </tr>
                              <tr>
                                <td>Availability</td>
                                <td><?php echo $numOfSeats - $num?> seat left</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary" name="submit">Book now</button>
                                </td>
                              
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    </form>
                   
                    <?php
                  }
                }
              }

            }catch(Exception $e) {
              echo $e->getMessage();
            }
          ?>
        
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>

