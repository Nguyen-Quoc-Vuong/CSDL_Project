<?php
session_start();
if (!isset($_SESSION["user"])) {
header("Location: login.php");
}
?>
<?php
require_once "../helper/connect_dtb.php";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// echo count($_POST)/5;
$listAddSql = array();
//require_once 'nhapthongtin.php';
if (isset($_POST)) {
    $numOfPassenger = count($_POST)/5;
    for($i = 1; $i <= $numOfPassenger; $i++) {
        $name = $_POST['name'.$i];
        $phone = $_POST['phone'.$i];
        $address = $_POST['address'.$i];
        $city = $_POST['city'.$i];
        $country = $_POST['country'.$i];
        
        $sql = "INSERT INTO `passenger` (`PassengerID`, `namePassenger`, `sdt`, `address`, `city`, `country`, `UserID`) 
        VALUES (NULL, '$name', '$phone', '$address', '$city', '$country', '2');";
        echo $sql.'<br>';

        $result = mysqli_query($conn, $sql);
        
    }
}

?>
<?php
if(isset($_POST)) {
    $amount = $_POST['price']; 
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang thanh toán</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Trang thanh toán</h1>
        <p>Bạn cần thanh toán số tiền là: <?php echo $amount; ?> đồng</p>
        <form method="post" action="qrcode.php">
            <div class="form-group">
                <label for="option">Lựa chọn thanh toán:</label>
                <select name="option" id="option" class="form-control">
                    <option value="full">Thanh toán toàn bộ tiền</option>
                    <option value="part">Thanh toán 1 phần tiền (50%)</option>
                </select>
            </div>
            <div class="form-group">
                <input name='price' type='hidden' value =<?php echo $amount; ?>>
                <button type="submit" name="pay" class="btn btn-primary">Thanh toán</button>
            </div>
        </form>
    </div>
</body>
</html>
