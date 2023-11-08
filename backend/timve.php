<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plane Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../asset/css/timve.css">
</head>
<body>
    <div class="container">
        <h1>Book Your Flight</h1>
        <form method="post" action="muave.php">
            <div class="row mb-3">
                <div class="col">
                    <label for="departureCity">Departure City:</label>
                    <select id="departureCity" name="departureCity" class="form-select" required>
                        <option value="">Select City</option>
                        <?php
                        try {
                            require_once "../helper/connect_dtb.php";
                            $sql = "SELECT DISTINCT diem_xuatphat FROM `flight` WHERE 1";
                            $result = mysqli_query($conn, $sql);
                            // $cities = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            // var_dump($result);
                            // echo '<pre>';
                            // print_r($cities);
                            // echo '</pre>';
                            $i = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?= $row['diem_xuatphat'] ?>"><?php echo $row['diem_xuatphat'] ?></option>
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
                            $sql = "SELECT DISTINCT diem_den FROM `flight` WHERE 1";
                            $result = mysqli_query($conn, $sql);
                            // $cities = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            // var_dump($result);
                            // echo '<pre>';
                            // print_r($cities);
                            // echo '</pre>';
                            $i = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?= $row['diem_den'] ?>"><?php echo $row['diem_den'] ?></option>
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
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                        <option value="First Class">First Class</option>
                    </select>
                </div>
            </div>
            <form method="post" action="muave.php">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <!-- <button type="submit" class="btn btn-primary">Search</button> -->
            <!-- <form method="post" action="muave.php">
                <button type="submit" class="btn btn-primary">Search</button>
            </form> -->
            <!-- <a href = "muave.php"><button type="submit" class="btn btn-primary">Search</button></a> -->
        </form>
    </div>
</body>
</html>

<!-- <?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>'; 
    ?> -->