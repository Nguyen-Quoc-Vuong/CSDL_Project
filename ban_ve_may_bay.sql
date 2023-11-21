-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 21, 2023 at 08:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ban_ve_may_bay`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `PassengerID` int(11) NOT NULL,
  `BookingStatusID` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `FlightID` int(11) NOT NULL,
  `TravelClassID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `BookingDate`, `PassengerID`, `BookingStatusID`, `id_danhmuc`, `FlightID`, `TravelClassID`, `PaymentID`) VALUES
(1, '2023-11-20 23:01:53', 8, 4, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookingstatus`
--

CREATE TABLE `bookingstatus` (
  `BookingStatusID` int(11) NOT NULL,
  `BookingStatusCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingstatus`
--

INSERT INTO `bookingstatus` (`BookingStatusID`, `BookingStatusCode`) VALUES
(1, 'Pending'),
(2, 'Confirmed'),
(3, 'Cancelled'),
(4, 'Paid'),
(5, 'Partially Paid');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`) VALUES
('Hà Nội'),
('Đà Nẵng'),
('Nghệ An'),
('BangKok'),
('Quảng Nam'),
('Quảng Bình'),
('Khánh Hòa'),
('Lâm Đồng'),
('Gia Lai'),
('Điện Biên'),
('Đắk Lắk'),
('Quảng Ninh'),
('Thanh Hóa'),
('Cà Mau'),
('Cần Thơ'),
('TP. Hồ Chí Minh'),
('Kiên Giang'),
('Thừa Thiên Huế');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FlightID` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `thoidiem_den` datetime NOT NULL,
  `thoidiem_di` datetime NOT NULL,
  `diem_xuatphat` varchar(50) NOT NULL,
  `diem_den` varchar(50) NOT NULL,
  `tong_thoi_gian` varchar(20) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `trang_thai` varchar(20) DEFAULT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FlightID`, `hinhanh`, `thoidiem_den`, `thoidiem_di`, `diem_xuatphat`, `diem_den`, `tong_thoi_gian`, `gia_ve`, `trang_thai`, `ghi_chu`, `id_danhmuc`) VALUES
(1, '1700380357_dalat.webp', '2001-01-01 00:00:00', '2001-12-12 00:00:00', 'Hà Nội', 'Đà Lạt', '1:30', 1500000, '1', 'không', 1),
(2, '1700380466_condao.jpeg', '2023-11-15 13:40:00', '2023-11-27 15:00:00', 'Đà Nẵng', 'Côn Đảo', '1:30', 1500000, '1', 'không', 2),
(3, '1700380550_ninhbinh.jpeg', '2023-11-19 13:00:00', '2023-11-19 19:00:00', 'Gia Lai', 'Hà Nội', '1:20', 1000000, '1', 'không', 1),
(4, '1700380940_chuLai.jpeg', '2023-01-12 15:00:00', '2023-01-12 19:00:00', 'Hà Nội', 'Chu Lai', '1:10', 1000000, '1', 'không', 2);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `PassengerID` int(11) NOT NULL,
  `namePassenger` varchar(128) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`PassengerID`, `namePassenger`, `sdt`, `address`, `city`, `country`, `UserID`) VALUES
(1, 'a', '0962873111', 'aaa', '', '', 5),
(2, 'a', '0962873111', 'aaa', '', '', 5),
(3, 'a', '0962873111', 'aaa', '', '', 5),
(4, 'a', '0962873111', 'aaa', '', '', 5),
(5, 'a', '0962873111', 'aaa', '', '', 5),
(6, 'a', '0962873111', 'aaa', '', '', 5),
(7, 'a', '0962873111', 'aaa', '', '', 5),
(8, 'a', '0962873111', 'aaa', '', '', 5),
(9, 'a', '0962873111', 'aaa', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `PaymentDate` datetime NOT NULL,
  `PaymentMethodID` int(11) NOT NULL,
  `PaymentAmount` decimal(10,2) NOT NULL,
  `PaymentStatusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `PaymentDate`, `PaymentMethodID`, `PaymentAmount`, `PaymentStatusID`) VALUES
(1, '2023-11-20 23:01:53', 2, 1000000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `PaymentMethodID` int(11) NOT NULL,
  `PaymentMethodCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`PaymentMethodID`, `PaymentMethodCode`) VALUES
(1, 'ATM'),
(2, 'QR'),
(3, 'Thẻ tín dụng');

-- --------------------------------------------------------

--
-- Table structure for table `paymentstatus`
--

CREATE TABLE `paymentstatus` (
  `PaymentStatusID` int(11) NOT NULL,
  `PaymentStatusCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentstatus`
--

INSERT INTO `paymentstatus` (`PaymentStatusID`, `PaymentStatusCode`) VALUES
(1, 'Paid'),
(2, 'Partially Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Một chiều'),
(2, 'Khứ hồi');

-- --------------------------------------------------------

--
-- Table structure for table `travelclass`
--

CREATE TABLE `travelclass` (
  `TravelClassID` int(11) NOT NULL,
  `TravelClassCode` varchar(255) NOT NULL,
  `so_ve` int(11) NOT NULL,
  `he_so_gia_ve` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travelclass`
--

INSERT INTO `travelclass` (`TravelClassID`, `TravelClassCode`, `so_ve`, `he_so_gia_ve`) VALUES
(1, 'Phổ thông', 200, 1.000),
(2, 'Thương gia', 200, 1.250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$.Xx2S2TIBoVCGDLAOoWlwudwWDSja75DR78wF7ef.aiWGTvX7ngQi', 1),
(2, 'Nguyễn Quốc Vương', 'vuong@gmail.com', '123456', 0),
(5, 'nguyen van a', 'test1@gmail.com', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`,`PassengerID`,`PaymentID`),
  ADD KEY `PassengerID` (`PassengerID`),
  ADD KEY `BookingStatusID` (`BookingStatusID`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `FlightID` (`FlightID`),
  ADD KEY `TravelClassID` (`TravelClassID`),
  ADD KEY `PaymentID` (`PaymentID`);

--
-- Indexes for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  ADD PRIMARY KEY (`BookingStatusID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FlightID`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`PassengerID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `PaymentMethodID` (`PaymentMethodID`),
  ADD KEY `PaymentStatusID` (`PaymentStatusID`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`PaymentMethodID`);

--
-- Indexes for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD PRIMARY KEY (`PaymentStatusID`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `travelclass`
--
ALTER TABLE `travelclass`
  ADD PRIMARY KEY (`TravelClassID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingstatus`
--
ALTER TABLE `bookingstatus`
  MODIFY `BookingStatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `FlightID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `PaymentMethodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  MODIFY `PaymentStatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travelclass`
--
ALTER TABLE `travelclass`
  MODIFY `TravelClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`PassengerID`) REFERENCES `passenger` (`PassengerID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`BookingStatusID`) REFERENCES `bookingstatus` (`BookingStatusID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`FlightID`) REFERENCES `flight` (`FlightID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`TravelClassID`) REFERENCES `travelclass` (`TravelClassID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_6` FOREIGN KEY (`PaymentID`) REFERENCES `payment` (`PaymentID`) ON UPDATE CASCADE;

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON UPDATE CASCADE;

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UsersID`) ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`PaymentMethodID`) REFERENCES `paymentmethod` (`PaymentMethodID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`PaymentStatusID`) REFERENCES `paymentstatus` (`PaymentStatusID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
