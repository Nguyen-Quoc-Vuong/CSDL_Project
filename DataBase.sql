
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- CREATE DATABASE ban_ve_may_bay;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'vuong', 'vuong@mail.com', '$2y$10$KRXGkY.dxYjD8FLZclW/Tu04wl76lD7IA4Z3nAsxtpdZxHNbYo4ZW'),
(2, 'duong', 'duong@mail.com', '$2y$10$KRXGkY.dxYjD8FLZclW/Tu04wl76lD7IA4Z3nAsxtpdZxHNbYo4ZW'),
(3, 'thuyen', 'thuyen@mail.com', '$2y$10$KRXGkY.dxYjD8FLZclW/Tu04wl76lD7IA4Z3nAsxtpdZxHNbYo4ZW'),
(4, 'tuan', 'tuan@mail.com', '$2y$10$KRXGkY.dxYjD8FLZclW/Tu04wl76lD7IA4Z3nAsxtpdZxHNbYo4ZW'),
(5, 'hung', 'hung@gmail.com', '$2y$10$WYgRxBC25DaEaK7cFHGmVOkCt0xwazEp39LnKxeHqVciMmz66Akuy');
-- drop table `users`
CREATE TABLE `flight` (
  `flight_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `thoidiem_den` datetime NOT NULL,
  `thoidiem_di` datetime NOT NULL,
  `diem_xuatphat` varchar(50) NOT NULL,
  `diem_den` varchar(50) NOT NULL,
  `hang_bay` varchar(50) NOT NULL,
  `so_ghe_da_dat` varchar(11) NOT NULL,
  `tong_thoi_gian` varchar(20) NOT NULL,
  `gia_ve` int(11) NOT NULL,
  `trang_thai` varchar(20) DEFAULT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL,
  `so_ghe_hang_thuong_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `flight` (`flight_id`, `admin_id`, `thoidiem_den`, `thoidiem_di`, `diem_xuatphat`, `diem_den`, `hang_bay`, `so_ghe_da_dat`, `tong_thoi_gian`, `gia_ve`, `trang_thai`, `ghi_chu`, `so_ghe_hang_thuong_gia`) VALUES
(1, 1, '2023-08-05 00:03:00', '2023-08-04 23:05:00', 'Ha Noi', 'Da Nang', 'VietNam Airlines', '100', '1', 500, 'Delayed', '', 20),
(2, 1, '2023-08-04 11:15:00', '2023-08-04 10:05:00', 'Ha Noi', 'Hai Phong', 'Vietjet Air', '120', '1', 185, 'On Time', '', 20),
(3, 1, '2023-08-05 12:13:00', '2023-08-05 10:13:00', 'Ha Noi', 'Nghe An', 'VietNam Airlines', '90', '2', 350, 'On Time', '', 20),
(4, 1, '2023-08-10 16:30:00', '2023-08-10 15:26:00', 'Da Nang', 'Nghe An', 'VietNam Airlines', '70', '1', 250, 'Delayed', '', 20),
(5, 1, '2023-08-10 15:30:00', '2023-08-10 12:30:00', 'TP Ho Chi Minh', 'Ha Noi', 'Vietjet Air', '80', '3', 1000, 'On Time', '', 20),
(6, 1, '2023-08-10 17:55:00', '2023-08-10 15:30:00', 'Nghe An', 'TP Ho Chi Minh', 'VietNam Airlines', '90', '2', 600, 'On Time', '', 20),
(7, 1, '2023-08-10 20:50:00', '2023-08-10 18:50:00', 'TP Ho Chi Minh', 'Da Nang', 'Bamboo Airways', '80', '2', 500, 'On Time', '', 20),
(8, 1, '2023-08-11 00:55:00', '2023-08-10 17:00:00', 'BangKok', 'Ha Noi', 'Bamboo Airways', '85', '7', 2000, 'On Time', '', 20),
(9, 1, '2023-08-10 17:09:00', '2023-08-10 16:05:00', 'Hai Phong', 'Da Nang', 'VietNam Airlines', '71', '1', 300, 'On Time', '', 20),
(10, 1, '2023-08-11 13:10:00', '2023-08-11 11:05:00', 'Quang Binh', 'Quang Nam', 'Vietjet Air', '83', '2', 200, 'On Time', '', 20),
(11, 1, '2023-08-11 19:10:00', '2023-08-11 18:05:00', 'Quang Binh', 'Thua Thien Hue', 'Bamboo Airways', '97', '1', 300, 'On Time', '', 20),
(12, 1, '2023-08-11 21:10:00', '2023-08-11 19:05:00', 'Thua Thien Hue', 'TP Ho Chi Minh', 'Vietstar Airlines', '100', '2', 900, 'Delayed', '', 20),
(13, 1, '2023-08-11 13:50:00', '2023-08-11 12:56:03', 'Dien Bien', 'Dak Lak', 'Viettravel Airlines', '111', '1', 450, 'On Time', '', 20),
(14, 1, '2023-08-11 11:08:00', '2023-08-11 09:07:00', 'Dak Lak', 'Gia Lai', 'Vietstar Airlines', '69', '2', 400, 'On Time', '', 20),
(15, 1, '2023-08-11 10:10:00', '2023-08-11 08:10:00', 'Khanh Hoa', 'Kien Giang', 'VietNam Airlines', '77', '2', 300, 'Delayed', '', 20),
(16, 1, '2023-08-11 18:10:00', '2023-08-11 16:09:00', 'Gia Lai', 'Lam Dong', 'Vietstar Airlines', '80', '2', 400, 'On Time', '', 20),
(17, 1, '2023-08-11 17:10:00', '2023-08-11 16:10:00', 'Thanh Hoa', 'Quang Ninh', 'Viettravel Airlines', '69', '1', 500, 'Delayed', '', 20),
(18, 1, '2023-08-11 19:15:00', '2023-08-11 16:12:00', 'Thanh Hoa', 'Lam Dong', 'Vietjet Air', '78', '3', 400, 'On Time', '', 20),
(19, 1, '2023-08-11 23:40:00', '2023-08-11 20:31:00', 'Quang Ninh', 'Dak Lak', 'VietNam Airlines', '98', '3', 500, 'On Time', '', 20),
(20, 1, '2023-08-11 23:58:00', '2023-08-11 22:14:00', 'TP Ho Chi Minh', 'Ca Mau', 'Viettravel Airlines', '88', '1', 450, 'Delayed', '', 20),
(21, 1, '2023-08-11 10:14:00', '2023-08-11 9:15:04', 'Ca Mau', 'Can Tho', 'VietNam Airlines', '66', '1', 300, 'On Time', '', 20);

-- DROP TABLE `flight`;

CREATE TABLE `airline` (
  `airline_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tong_so_ghe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `airline` (`airline_id`, `name`, `tong_so_ghe`) VALUES
(1, 'VietNam Airlines', 220),
(2, 'Vietjet Air', 150),
(3, 'Bamboo Airways', 185),
(4, 'Viettravel Airlines', 165),
(5, 'Vietstar Airlines', 200);

-- drop table `airline`;

CREATE TABLE `cities` (
  `city` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cities` (`city`) VALUES
('Ha Noi'),
('Da Nang'),
('Nghe An'),
('BangKok'),
('Quang Nam'),
('Quang Binh'),
('Khanh Hoa'),
('Lam Dong'),
('Gia Lai'),
('Dien Bien'),
('Dak Lak'),
('Quang Ninh'),
('Thanh Hoa'),
('Ca Mau'),
('Can Tho'),
('TP Ho Chi Minh'),
('Kien Giang'),
('Thua Thien Hue');

-- drop table `cities`;

CREATE TABLE `thong_tin_hanh_khach` (
  `hanh_khach_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `so_dien_thoai` varchar(110) NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  `ho` varchar(20) DEFAULT NULL,
  `ten_dem` varchar(20) DEFAULT NULL,
  `ten` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `thong_tin_hanh_khach` (`hanh_khach_id`, `user_id`, `flight_id`, `so_dien_thoai`, `ngay_sinh`, `ho`, `ten_dem`, `ten`) VALUES
(1, 1, 1, '2147483647', '1995-01-01 00:00:00', 'Nguyen', 'Thanh', 'Vu'),
(2, 2, 3, '2147483647', '1995-02-13 00:00:00', 'Nguyen', 'Hai', 'Duong'),
(3, 3, 2, '2147483647', '1994-06-21 00:00:00', 'Nguyen', 'Anh', 'Tu'),
(4, 4, 2, '2147483647', '1995-05-16 00:00:00', 'Duong', 'Quang', 'Nam'),
(5, 2, 8, '7854444411', '1995-02-13 00:00:00', 'Hoang', 'Viet', 'Cuong'),
(6, 2, 20, '7412585555', '1995-02-13 00:00:00', 'Tran', 'Khanh', 'Ngoc'),
(7, 5, 1, '7894567894', '2004-06-02 00:00:00', 'Do', 'Thuy', 'Dung'),
(8, 5, 1, '7894561274', '2003-06-02 00:00:00', 'Duong', 'Thanh', 'An'),
(9, 1, 15, '2147653256', '2000-12-02 00:00:00', 'Do', 'Thuy', 'Dung'),
(10, 2, 1, '2147653257', '1997-06-02 00:00:00', 'Nguyen', 'Danh', 'Dat'),
(11, 3, 1, '2147653258', '1977-06-16 00:00:00', 'Do', 'Duc', 'Nam'),
(12, 4, 1, '2147653259', '1992-09-18 00:00:00', 'Can', 'Duy', 'Hung');

-- drop table `thong_tin_hanh_khach`

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `hanh_khach_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cho_ngoi` varchar(10) NOT NULL,
  `gia` int(11) NOT NULL,
  `day_ghe` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `ticket` (`ticket_id`, `hanh_khach_id`, `flight_id`, `user_id`, `cho_ngoi`, `gia`, `day_ghe`) VALUES
(1, 1, 1, 1, '21A', 1000, 'E'),
(2, 2, 3, 2, '21A', 350, 'E'),
(3, 3, 2, 3, '21A', 185, 'E'),
(4, 4, 2, 4, '21C', 370, 'E'),
(5, 5, 8, 2, '21A', 4000, 'E'),
(6, 6, 20, 2, '21A', 900, 'E'),
(7, 7, 1, 5, '21C', 500, 'E'),
(8, 8, 1, 5, '21D', 500, 'E'),
(9, 9, 15, 1, '21B', 600, 'E'),
(10, 10, 14, 3, '21B', 400, 'E'),
(11, 11, 13, 5, '21C', 450, 'E'),
(12, 12, 17, 4, '21B', 500, 'E');

-- drop table `ticket`;

CREATE TABLE `payment` (
  `so_the` varchar(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `han_su_dung` varchar(5) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `payment` (`so_the`, `user_id`, `flight_id`, `han_su_dung`, `amount`) VALUES
('1010555677851111', 4, 2, '10/26', 370),
('1020445869651011', 2, 20, '12/25', 370),
('1111888889897778', 2, 3, '12/25', 205),
('1400565800004478', 2, 8, '12/25', 1230),
('14567894561234', 5, 1, '12/26', 175),
('1458799990001450', 3, 2, '12/25', 185),
('4204558500014587', 1, 1, '02/25', 350),
('764561234894561', 5, 1, '07/26', 175);

-- drop table `payment`

CREATE TABLE `pwdreset` (
  `pwd_reset_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(120) NOT NULL,
  `mat_khau_het_han` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;