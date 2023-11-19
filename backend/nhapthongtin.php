<?php
    if(isset($_COOKIE['FlightID'])) {
      $FlightID = $_COOKIE['FlightID'];
    }
    var_dump($FlightID);
    // echo "<br>Get<br>";
    // var_dump($_GET);
    // echo "<br>Post<br>";
    // var_dump($_POST);
    // echo "<br>";
    
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPC7Q0Y72iOo2b54Q4/oEBO/4+l3NPM9wU8gST1r+wSLH" crossorigin="anonymous">
</head>
<body>
  <h1>Flight Booking</h1>
  <form action="thanhtoan.php" method="post">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="col">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="col">
          <label for="passenger">Number of Passengers:</label>
          <input type="number" id="passenger" name="passenger" min="1" class="form-control" required>
        </div>
      </div>
        <button type="submit" class="btn btn-primary">Book now</button>
    </div>
  </form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    // get number of Passengers
    $sql_numOfPassengers = "SELECT COUNT(*) as num from passenger WHERE 1;";
    $res = mysqli_query($conn, $sql_numOfPassengers);
    $numOfPassengers = mysqli_fetch_array($res)['num'];
    // 
    
  }   
?>
