create database ban_ve_may_bay;
use ban_ve_may_bay;
CREATE TABLE Users (
  UsersID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fullname varchar(128) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(20) NOT NULL,
  role tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`UsersID`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', 1),
(2, 'Nguyễn Quốc Vương', 'vuong@gmail.com', '123456', 0);

CREATE TABLE TravelClass (
  TravelClassID INT(11) AUTO_INCREMENT PRIMARY KEY,
  TravelClassCode VARCHAR(255) NOT NULL ,
  so_ve INT(11) NOT NULL,
  he_so_gia_ve decimal(4,3) NOT NULL 
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO TravelClass (TravelClassCode, so_ve, he_so_gia_ve) VALUES
('Phổ thông', 200, 1.0),
('Thương gia', 200, 1.25);

CREATE TABLE Passenger (
  PassengerID INT AUTO_INCREMENT PRIMARY KEY,
  sdt VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  country VARCHAR(255) NOT NULL,
  FOREIGN KEY (PassengerID) REFERENCES Users(UsersID) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE Flight (
  FlightID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  hinhanh varchar(100) not null, 
  thoidiem_den datetime NOT NULL,
  thoidiem_di datetime NOT NULL,
  diem_xuatphat varchar(50) NOT NULL,
  diem_den varchar(50) NOT NULL,
  tong_thoi_gian varchar(20) NOT NULL,
  gia_ve int(11) NOT NULL,
  trang_thai varchar(20) DEFAULT NULL,
  ghi_chu varchar(50) DEFAULT NULL, 
  id_danhmuc int not null 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4  COLLATE=utf8mb4_unicode_ci;


-- loại vé như khứ hồi, 1 chiều  
CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- phương thức thanh toán: ATM, QR, Thẻ tín dụng
CREATE TABLE PaymentMethod (
  PaymentMethodID INT AUTO_INCREMENT PRIMARY KEY,
  PaymentMethodCode VARCHAR(255) NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO TicketType (TicketTypeCode) VALUES 
('ATM'),
('QR'),
('Thẻ tín dụng');

-- Trả rồi, chưa trả
CREATE TABLE PaymentStatus (
  PaymentStatusID INT AUTO_INCREMENT PRIMARY KEY,
  PaymentStatusCode VARCHAR(255) NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO TicketType (TicketTypeCode) VALUES 
('Paid'),
('Partially Paid');

CREATE TABLE Payment (
  PaymentID INT AUTO_INCREMENT PRIMARY KEY,
  PaymentDate DATETIME NOT NULL,
  PaymentMethodID INT NOT NULL,
  PaymentAmount DECIMAL(10,2) NOT NULL,
  PaymentStatusID INT NOT NULL,
  FOREIGN KEY (PaymentMethodID) REFERENCES PaymentMethod(PaymentMethodID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (PaymentStatusID) REFERENCES PaymentStatus(PaymentStatusID) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE BookingStatus (
  BookingStatusID INT(11) AUTO_INCREMENT PRIMARY KEY,
  BookingStatusCode VARCHAR(255) NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO TicketType (TicketTypeCode) VALUES 
('Pending'),
('Confirmed'),
('Cancelled'),
('Paid'),
('Partially Paid');


CREATE TABLE Booking (
  BookingID INT PRIMARY KEY,
  BookingDate DATETIME NOT NULL,
  PassengerID INT NOT NULL,
  BookingStatusID INT NOT NULL,
  TicketTypeID INT NOT NULL,
  FlightID INT NOT NULL,
  TravelClassID INT NOT NULL,
  PaymentID INT NOT NULL,
  FOREIGN KEY (PassengerID) REFERENCES Passenger(PassengerID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (BookingStatusID) REFERENCES     BookingStatus(BookingStatusID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (TicketTypeID) REFERENCES TicketType(TicketTypeID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (FlightID) REFERENCES Flight(FlightID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (TravelClassID) REFERENCES TravelClass(TravelClassID) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (PaymentID) REFERENCES Payment(PaymentID) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `cities` (
  `city` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
