



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
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">

  </head>
  
<header>
    <div class="container">
      <div class="row row1 row2">
        <div class="col-md-4" style="display : flex">
          <img src="../asset/img/VNA_logo_vn.webp" alt="" style="height: 80px;width:100%; margin-left : 0px">
          <img src="../asset/img/skyteam.webp" alt="" style="height: 40px; width: 50px ;margin-top : 15px">
        </div>
        <div class="col-md-6">
          <nav class="navbar" style="background-color: #e3f2fd;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">

                <a class="navbar-brand" href="#">DỊCH VỤ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Thông tin hành trình </a>
                      <ul class="dropdown-content">
                        <li>
                          <a class="dropdown-item" href="#">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Mua vé và sản phẩm khác </a>
                      <ul class="dropdown-content">
                        <li>
                          <a class="dropdown-item" href="timve.php">Mua ve</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                      </ul>
                    </li> 

                  </ul>
                </div>
              </div>
            </nav>
          </nav>
        </div>
        <div class="col-md-2" style="display : flex">
           <a href="login.php">LOG OUT
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
           </a>
      </div>
      </div>
      </div>
    </div>    
</header>

  <body>    
    <div class="container">
    <link rel="stylesheet" href="../asset/css/timve.css">
        <h1>Book Your Flight</h1>
        <form method="post" action="muave.php">
        <link rel="stylesheet" href="../asset/css/radiobtn.css">
            
            <input type="radio" name="tripType" value="roundTrip" id="roundTrip">
            <label for="roundTrip">Khứ hồi</label>
            <input type="radio" name="tripType" value="oneWay" id="oneWay">
            <label for="oneWay">Một chiều</label>
            <input type="radio" name="tripType" value="multiCity" id="multiCity">
            <label for="multiCity">Nhiều chặng</label>
            
            <div class="row mb-3">
                <div class="col">
                    <label for="departureCity">Departure City:</label>
                    <select id="departureCity" name="departureCity" class="form-select" required>
                        <option value="">Select City</option>
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
                <div class="col">
                    <label for="arrivalCity">Arrival City:</label>
                    <select id="arrivalCity" name="arrivalCity" class="form-select" required>
                    <option value="">Select City</option>
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
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="departureDate">Departure Date:</label>
                    <input type="date" id="departureDate" name="departureDate" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="returnDate">Return Date (optional):</label>
                    <input type="date" id="returnDate" name="returnDate" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="passengers">Number of Passengers:</label>
                    <input type="number" id="passengers" name="passengers" min="1" class="form-control" required>
                </div>
                <div class="col">
                    <label for="seatingPreference">Seating Preference:</label>
                    <select id="seatingPreference" name="seatingPreference" class="form-select" required>
                        <?php
                          try {
                            require_once "../helper/connect_dtb.php";
                            $sql = "SELECT DISTINCT travelClassCode FROM travelclass WHERE 1";
                            $result = mysqli_query($conn, $sql);
                            $i = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?= $row['travelClassCode'] ?>"><?php echo $row['travelClassCode'] ?></option>
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
            <form method="post" action="muave.php">
                <button type="submit">Search</button>
            </form>
        </form>
    </div>
  </body>
</html>