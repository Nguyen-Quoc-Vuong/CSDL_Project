<?php
$amount = 1000000; 
$account = "123456789";
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
                <button type="submit" name="pay" class="btn btn-primary">Thanh toán</button>
            </div>
        </form>
    </div>
</body>
</html>
