<link rel="stylesheet" href="../asset/css/bootstrap.css">

<?php
// var_dump($_POST);
  $listOfPassSQL = array();
  if(isset($_POST)) {
    $numOfPassengers = (int)$_POST['numOfPass'];
  }  
  ?>
  <form action="temp.php" method="post">
  <?php
  for ($i = 1; $i <= $numOfPassengers; $i++) {
    echo "Passenger $i: <br>
    <div class='container'>
      <div class='row mb-3'>
        <div class='col'>
          <label for='name'>Full Name:</label>
          <input type='text' id='name' name='name$i' class='form-control' required>
        </div>
        <div class='col'>
          <label for='email'>Email Address:</label>
          <input type='email' id='email' name='email$i' class='form-control' required>
        </div>
      </div>
      <div class='row mb-3'>
        <div class='col'>
          <label for='phone'>Phone Number:</label>
          <input type='tel' id='phone' name='phone$i' class='form-control' required>
        </div>
      </div>
    </div>";
  }
?>
  <button type="submit" class="btn btn-primary">Book now</button>
  </form>
<?php

if (isset($_POST['submit'])) {
    // get number of Passengers
    $sql_numOfPassengers = "SELECT COUNT(*) as num from passenger WHERE 1;";
    $res = mysqli_query($conn, $sql_numOfPassengers);
    $numOfPassengers = mysqli_fetch_array($res)['num'];
    // 
  }   
?>