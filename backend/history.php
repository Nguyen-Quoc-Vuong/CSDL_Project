<?php
    session_start();
    if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    }
    if (isset($_SESSION['UserID'])) {
        $UserID = $_SESSION['UserID'];
    } 

?>

<?php
    
        require_once "../helper/connect_dtb.php";
        $sql = "SELECT* FROM booking
        JOIN passenger ON booking.PassengerID = passenger.PassengerID
        JOIN bookingstatus ON bookingstatus.BookingStatusID = booking.BookingStatusID
        JOIN tbl_danhmuc ON booking.id_danhmuc = tbl_danhmuc.id_danhmuc
        JOIN flight ON booking.FlightID = flight.FlightID
        JOIN travelclass ON booking.TravelClassID = travelclass.TravelClassID
        JOIN payment ON booking.PaymentID = payment.PaymentID
        JOIN users ON payment.UserID = users.UserID
        ORDER BY booking.BookingDate";
        
        $result = mysqli_query($conn, $sql);

?>
    <h2 style="text-align: center; color: #0098D8;">Lịch sử mua hàng </h2>
<table class="viptable" style = " width:100%" border="1" style ="border-collapse: collapse;">
<tr>
    <th>Id</th>
    <th>Ngày đặt</th>
    <th>Khách hàng</th>
    <th>Trạng thái</th>
    <th>Loại vé</th>
    <th>Thời điểm đi</th>
    <th>Thời điểm đến</th>
    <th>Điểm xuất phát</th>
    <th>Điểm đến</th>
    <th>Hạng</th>
    <th>Chi phí</th>
</tr>

    <?php
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo  $row['BookingDate']  ?></td> 
        <td><?php echo ($row['namePassenger'])  ?></td>
        <td><?php echo ($row['BookingStatusCode'])  ?></td>
        <td><?php echo ($row['tendanhmuc'])  ?></td>
        <td><?php echo ($row['thoidiem_di'])  ?></td>
        <td><?php echo ($row['thoidiem_den'])  ?></td>
        <td><?php echo ($row['diem_xuatphat'])  ?></td>
        <td><?php echo ($row['diem_den'])  ?></td>
        <td><?php echo ($row['TravelClassCode'])  ?></td>
        <td><?php echo ($row['PaymentAmount'])  ?></td>
        <td>
</td>
    </tr>
<?php
    }
    ?>
    </table>
    <style>
    table.viptable th,table.viptable td {
        text-align: center;
    }
    </style> 
              
              
              
    