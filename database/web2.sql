-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2024 lúc 07:28 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `IDAccount` int(11) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`IDAccount`, `FirstName`, `LastName`, `Email`, `Password`, `DiaChi`, `SDT`, `Role`, `Status`) VALUES
(1, 'Nguyen', 'Cong', 'congkhpro291002@gmail.com', '123', 'C11', '0912381273', 'Admin', '0'),
(2, 'Lai', 'Quang Vinh', 'quangvinhlai123@gmail.com', '123', '123 qwe', '0988083616', 'User', '0'),
(3, 'Mai', 'Ngoc Canh', 'canhmai2002@gmail.com', '123', '123 abc', '0988083616', 'Manager', '1'),
(6, 'Nguyen', 'Van Tien Dung', 'dunghackerlo@gmail.com', '123', '', '', 'Employee', '1'),
(7, 'Nguyen', 'Thi Kim Ha', 'kimha@gmail.com', '123', '', '', 'Employee', '1'),
(8, 'Võ', 'Hoàng Yến', 'vohoangyen@gmail.com', '123', 'abc', '09880361689', 'User', '1'),
(9, 'Nguyen', 'Dung', 'dungdung2468@gmail.com', '1234', '123 abc', '0988083616', 'Admin', '1'),
(10, 'Nguyen', 'Cong', 'congkhonglo@gmail.com', '12345', '', '', 'Employee', '1'),
(11, 'Le', 'Hue', 'lethihue@gmail.com', '1234', '', '', 'User', '1'),
(12, 'Nguyễn', 'Dũng', 'dungvippro09@gmail.com', '12345', '', '', 'Manager', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caterogyproduct`
--

CREATE TABLE `caterogyproduct` (
  `IDCaterogyProduct` int(11) NOT NULL,
  `NameCaterogyProduct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `caterogyproduct`
--

INSERT INTO `caterogyproduct` (`IDCaterogyProduct`, `NameCaterogyProduct`) VALUES
(0, 'Các Mô Hình Khác'),
(3, 'Phụ Kiện '),
(4, 'Gấu Bông '),
(5, 'Đã Qua Sử Dụng(2ND) '),
(7, 'Naruto'),
(8, 'Dragon Ball'),
(9, 'Kamen Raider'),
(10, 'League of Legend'),
(11, 'AR'),
(12, 'Pistol'),
(13, 'SMG'),
(14, 'SR'),
(15, 'Shotgun'),
(16, 'One Piece');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `IDCTDonHang` int(11) NOT NULL,
  `IDDonHang` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ctdonhang`
--

INSERT INTO `ctdonhang` (`IDCTDonHang`, `IDDonHang`, `ProductID`, `SoLuong`) VALUES
(1, 1, 14, 2),
(2, 1, 15, 2),
(3, 1, 16, 2),
(4, 2, 17, 3),
(5, 2, 18, 3),
(6, 3, 4, 4),
(7, 3, 2, 4),
(8, 3, 3, 2),
(9, 4, 14, 2),
(10, 4, 15, 2),
(11, 4, 16, 2),
(12, 5, 20, 5),
(13, 6, 39, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IDDonHang` int(11) NOT NULL,
  `IDAccount` int(10) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `NgayDat` date NOT NULL,
  `TongTien` int(100) NOT NULL,
  `TrangThai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IDDonHang`, `IDAccount`, `TenKH`, `DiaChi`, `SDT`, `NgayDat`, `TongTien`, `TrangThai`) VALUES
(1, 2, 'Lai Quang Vinh', '123 qwe', '0988083616', '2023-05-09', 900000, 1),
(2, 9, 'Nguyen Dung', '123 abc', '0988083616', '2023-05-09', 2700000, 1),
(3, 3, 'Mai Ngoc Canh', '123 abc', '0988083616', '2023-05-09', 866666, 1),
(4, 9, 'Nguyen Dung', '123 abc', '0988083616', '2023-05-10', 900000, 1),
(5, 9, 'Nguyen Dung', '123 abc', '0988083616', '2023-05-10', 250000, 1),
(6, 1, 'Nguyen Cong', 'C11', '0912381273', '2023-11-16', 600000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `IDPhanQuyen` int(10) NOT NULL,
  `IDQuyen` int(10) NOT NULL,
  `KhuVucQuanLi` varchar(50) NOT NULL,
  `Them` int(10) NOT NULL,
  `Xoa` int(10) NOT NULL,
  `Sua` int(10) NOT NULL,
  `Xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`IDPhanQuyen`, `IDQuyen`, `KhuVucQuanLi`, `Them`, `Xoa`, `Sua`, `Xem`) VALUES
(1, 1, 'QLSP', 0, 0, 1, 1),
(2, 1, 'QLDH', 0, 0, 1, 1),
(3, 1, 'QLUser', 1, 0, 1, 1),
(4, 1, 'QLDT', 0, 0, 0, 1),
(5, 2, 'QLSP', 1, 1, 1, 1),
(6, 2, 'QLDH', 0, 0, 1, 1),
(7, 2, 'QLUser', 1, 0, 1, 1),
(8, 2, 'QLDT', 0, 0, 1, 1),
(9, 3, 'QLSP', 0, 0, 0, 1),
(10, 3, 'QLDH', 1, 1, 1, 1),
(11, 3, 'QLUser', 0, 0, 0, 0),
(12, 3, 'QLDT', 0, 0, 0, 0),
(13, 1, 'QLQuyen', 0, 0, 1, 1),
(14, 2, 'QLQuyen', 0, 0, 1, 1),
(15, 3, 'QLQuyen', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `IDCaterogyProduct` int(11) NOT NULL,
  `NameProduct` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Image` longtext NOT NULL,
  `ProductDetail` varchar(10000) NOT NULL,
  `Height` mediumtext NOT NULL,
  `Weight` mediumtext NOT NULL,
  `Material` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `IDCaterogyProduct`, `NameProduct`, `Amount`, `Price`, `Image`, `ProductDetail`, `Height`, `Weight`, `Material`) VALUES
(2, 8, 'Goku bản năng vô cực', 0, 100000, 'goku-ban-nang-vo-cuc.jpg', 'Goku cũng giống như naruto nhưng nổi tiếng hơn và ra mắt được hơn 20 năm cụ thể là 22 năm ', '70cm', '1.2kg', 'Nhựa'),
(3, 8, 'Goku Super Saiyan', 1, 33333, 'super-saiyan-goku.jpg', 'Goku cũng giống như naruto nhưng nổi tiếng hơn và ra mắt được hơn 20 năm cụ thể là 22 năm ', '60cm', '1kg', 'Nhựa'),
(4, 10, 'Zed', 6, 100000, 'zed.jpg', 'zed', '', '', ''),
(5, 16, 'Luffy Gear 5', 10, 500000, 'mo-hinh-luffy-nika-gear-5-chien-dau-30cm-anime-one-piece-4.jpg', 'Mô hình luffy gear 5 siêu ngầu', '70cm', '1.3kg', 'Nhựa'),
(6, 9, 'Zi-O', 10, 200000, 'Kmrd-Zi-O.jpg', 'Mô hình Zi-O', '', '', ''),
(14, 7, 'Mô hình Obito', 6, 100000, 'naruto1.jpg', 'abc', '50cm', '2kg', 'Nhựa'),
(15, 7, 'Mô hình Itachi', 16, 200000, 'naruto2.jpg', 'abc', '60cm', '1kg', 'Nhựa'),
(16, 7, 'Mô hình Sasuke với Susano', 16, 150000, 'naruto3.jpg', 'abc', '60cm', '1kg', 'Nhựa'),
(17, 7, 'Mô Hình Sasuke&Itachi', 17, 500000, 'naruto4-min.png', 'abc', '80cm', '1.5kg', 'Nhựa'),
(18, 7, 'Mô hình Naruto Hiền Nhân', 37, 400000, 'naruto5.jpg', 'abc', '65cm', '1.3kg', 'Nhựa'),
(20, 5, 'Phù thủy bóng đêm', 5, 50000, '2nd1-min.jpg', 'abc', '30cm', '0.4kg', 'Nhựa'),
(21, 7, 'Dedara Phiên bản 1', 20, 200000, 'deidara1.PNG', 'abc', '50cm', '1.2kg', 'Nhựa'),
(22, 7, 'Dedara Chibi', 50, 20000, 'deidara2.PNG', 'abc', '10cm', '0.3kg', 'Nhựa'),
(23, 7, 'Itachi Anbu', 30, 40000, 'itachi1.PNG', 'abc', '40cm', '0.9kg', 'Nhựa'),
(24, 7, 'Itachi Akatsuki', 10, 700000, 'itachi2.PNG', 'abc', '80cm', '1.5kg', 'Nhựa'),
(25, 7, 'Itachi Anbu 2', 30, 400000, 'itachi3.PNG', 'abc', '90cm', '1.7kg', 'Nhựa'),
(26, 7, 'Itachi Revive', 15, 800000, 'itachi4.PNG', 'abc', '80cm', '1.8kg', 'Nhựa'),
(27, 7, 'Kakashi & Susano', 5, 1000000, 'kakashi.PNG', 'abc', '80cm', '1.5kg', 'Nhựa'),
(28, 7, 'Kisame', 8, 550000, 'kisame.PNG', 'abc', '70cm', '0.9kg', 'Nhựa'),
(29, 7, 'Madara & Cửu Vĩ', 7, 400000, 'madara.PNG', 'abc', '60cm', '1.5kg', 'Nhựa'),
(30, 0, 'Naruto Hiền Nhân', 4, 150000, 'naruto1.PNG', 'abc', '50cm', '1kg', 'Nhựa'),
(31, 7, 'Naruto & Rasensuriken', 10, 350000, 'naruto2.PNG', 'abc', '60cm', '1.2kg', 'Nhựa'),
(32, 7, 'Naruto Lục Đạo Chibi', 40, 30000, 'naruto6.PNG', 'abc', '20cm', '0.2kg', 'Nhựa'),
(33, 0, 'Sasuke', 10, 300000, 'sasuke1.PNG', 'abc', '60cm', '1kg', 'Nhựa'),
(34, 0, 'Sasuke & Chidori', 20, 399999, 'sasuke3.PNG', 'abc', '70cm', '1.3kg', 'Nhựa'),
(35, 5, 'Yu-gi-o', 3, 70000, '2nd2-min.jpg', 'abc', '30cm', '0.3kg', 'Inox'),
(36, 11, 'M16A4', 10, 300000, 'ar1-min.jpg', 'abc', '40cm', '1.4kg', 'Nhựa'),
(37, 11, 'M4A1', 8, 400000, 'ar2-min.jpg', 'abc', '40cm', '1.2kg', 'Nhựa'),
(38, 0, 'AR15', 4, 450000, 'ar3-min.jpg', 'abc', '40cm', '1.3kg', 'Nhựa'),
(39, 0, 'Scar-L X4', 1, 600000, 'ar5-min.jpg', 'abc', '50cm', '1.5kg', 'Nhựa'),
(40, 0, 'Jenifer', 20, 120000, 'gaubong1-min.jpg', 'abc', '30cm', '0.3kg', 'Bông'),
(41, 0, 'Mèo quàng khăn', 7, 40000, 'gaubong2-min.jpg', 'abc', '40cm', '0.3kg', 'Bông'),
(42, 8, 'Vegeta', 2, 1200000, 'goku1.jpg', 'abc', '100cm', '3kg', 'Nhựa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `IDQuyen` int(10) NOT NULL,
  `TenQuyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`IDQuyen`, `TenQuyen`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Employee');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDAccount`);

--
-- Chỉ mục cho bảng `caterogyproduct`
--
ALTER TABLE `caterogyproduct`
  ADD PRIMARY KEY (`IDCaterogyProduct`);

--
-- Chỉ mục cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`IDCTDonHang`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDonHang`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `IDAccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `caterogyproduct`
--
ALTER TABLE `caterogyproduct`
  MODIFY `IDCaterogyProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `IDCTDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
