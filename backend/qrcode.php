<!-- <?php
// $amount = $_POST['amount']; 
// $account = $_POST['account'];

$qr_image = "../img/qr.jpg"; 

if (isset($_POST['pay'])) {
    $option = $_POST['option'];
}
?> -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang QR code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #qr-container {
            width: 300px;
            height: 300px;
            margin: auto;
            background-color: white;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            display: <?php echo isset($_POST['pay']) ? 'block' : 'none'; ?>;
        }
        #qr-container img {
            width: 200px;
            height: 200px;
            display: block;
            margin: auto;
        }
        #qr-container p {
            text-align: center;
        }
        #qr-container button {
            display: inline-block;
            margin: 5px;
        }
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.8;
            z-index: 9;
            display: <?php echo isset($_POST['pay']) ? 'block' : 'none'; ?>;
        }
    </style>
</head>
<body>
    <form method="post" action="thanhtoan.php">
        <div id="overlay"></div>
        <div id='qr-container'>
            <img src='<?php echo $qr_image; ?>' alt='QR code'>
            <p>Số tài khoản: <?php echo 10000; ?></p>
            <button type='submit' name='back' class='btn btn-secondary'>Quay lại</button>
            <button type='button' class='btn btn-primary'>Xác nhận</button>
        </div>
    </form>
</body>
</html>
