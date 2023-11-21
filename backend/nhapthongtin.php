<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
if (isset($_POST)) {
  $_SESSION['price'] = $_POST['price'];
  $_SESSION['FlightID'] = $_POST['FlightID'];
  $_SESSION['tbl_danhmuc'] = $_POST['tripType'];
  $_SESSION['numOfPass'] = $_POST['numOfPass'];
  $_SESSION['travelClass'] = $_POST['travelClass'];
  $numOfPassengers = (int)$_SESSION['numOfPass'];

  if ($_SESSION['tbl_danhmuc'] == 'oneWay') {
    $_SESSION['id_danhmuc'] = 1;
    $price = (int)$_SESSION['price'] * $numOfPassengers;
  } else {
    $_SESSION['id_danhmuc'] = 2;
    $price = (int)$_SESSION['price'];
    $price *= 2 * $numOfPassengers;
    $_SESSION['price'] = $price;
  }

  $UserID = $_SESSION['UserID'];
  $FlightID = $_SESSION['FlightID'];

  $travelClass = $_SESSION['travelClass'];
  if ($travelClass != 'Phổ') {
    $price *= 1.5;
    $_SESSION['price'] = $price;
  }
}
?>
<link rel="stylesheet" href="../asset/css/bootstrap.css">
<link rel="stylesheet" href="../asset/css/style.css">

<?php
// var_dump($_POST);
  $listOfPassSQL = array();
  // if(isset($_POST)) {
  //   $numOfPassengers = (int)$_POST['numOfPass'];
  //   $price = (int)$_POST['price'];
  //   $FlightID = $_POST['FlightID'];
  //   $travelClass = $_POST['travelClass'];
  // }  
  ?>
  <form action="thanhtoan.php" method="post">
  <?php
  for ($i = 1; $i <= $numOfPassengers; $i++) {
    echo "Passenger $i: <br>
    <div class='container'>
      <div class='row mb-3'>
        <div class='col'>
          <label for='name'>Full Name:</label>
          <input type='text' id='name' name='name$i' class='form-control' required>
        </div>
      </div>
      <div class='row mb-3'>
        <div class='col'>
          <label for='phone'>Phone Number:</label>
          <input type='tel' id='phone' name='phone$i' class='form-control' required>
        </div>
      </div>
      <div class='row mb-3'>
        <div class='col'>
          <label for='Address'>Address:</label>
          <input type='text' id='address' name='address$i' class='form-control' required>
        </div>
      </div>
      <div class='row mb-3'>
        <div class='col'>
          <label for='city'>City:</label>
          <input type='text' id='city' name='city$i' class='form-control'>
        </div>
      </div>
      <div class='row mb-3'>
        <div class='col'>
          <label for='country'>Country:</label>
          <input type='text' id='country' name='country$i' class='form-control'>
        </div>
      </div>
    </div>";
  }
  echo "
  <input name='travelClass' type='hidden' value=".$travelClass.">
  <input name='FlightID' type='hidden' value='.$FlightID.'>
  <input name='price' type='hidden' value =".$price.">
  <button type='submit' class='btn btn-primary'>Book now</button>
  </form>"
?>