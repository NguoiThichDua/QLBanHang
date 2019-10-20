-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 05:50 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QLBanHang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `maadmin` int(11) NOT NULL,
  `tentaikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kieuadmin` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`maadmin`, `tentaikhoan`, `matkhau`, `hoten`, `kieuadmin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nguyễn Thanh Thoại', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethanghoa`
--

CREATE TABLE `chitiethanghoa` (
  `macthh` int(11) NOT NULL,
  `mahanghoa` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float DEFAULT NULL,
  `madonhangcho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethanghoa`
--

INSERT INTO `chitiethanghoa` (`macthh`, `mahanghoa`, `soluong`, `dongia`, `madonhangcho`) VALUES
(93, 5, 15, NULL, 89),
(94, 7, 20, NULL, 89),
(95, 6, 20, NULL, 90),
(96, 5, 30, NULL, 90),
(97, 5, 10, NULL, 91),
(98, 6, 20, NULL, 91),
(99, 6, 100, NULL, 92),
(100, 7, 50, NULL, 92),
(101, 5, 10, NULL, 93),
(102, 6, 20, NULL, 93),
(103, 7, 30, NULL, 93),
(104, 5, 5, NULL, 94),
(105, 6, 10, NULL, 94);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `solo_nsx` date NOT NULL,
  `mabill` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hangton` int(11) NOT NULL DEFAULT 0,
  `congno` float NOT NULL,
  `madonhangcho` int(11) NOT NULL,
  `thanhtien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `ngaytao`, `solo_nsx`, `mabill`, `hangton`, `congno`, `madonhangcho`, `thanhtien`) VALUES
(6, '2019-10-19', '2019-10-09', '1652480201050', 0, 500000, 89, 0),
(7, '2019-10-19', '2019-10-23', '1652480201055', 0, 10000, 90, 0),
(8, '2019-10-19', '2019-10-17', '1652480201060', 0, 20000, 91, 0),
(9, '2019-10-20', '2019-10-16', '1652480201050', 0, 0, 94, 75000),
(10, '2019-10-20', '2019-10-15', '1652480201050', 0, 0, 93, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `donhangcho`
--

CREATE TABLE `donhangcho` (
  `madonhangcho` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `makhachhang` int(11) NOT NULL,
  `ghichu` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'chuagui'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhangcho`
--

INSERT INTO `donhangcho` (`madonhangcho`, `ngaytao`, `makhachhang`, `ghichu`, `trangthai`) VALUES
(89, '2019-10-19', 7, 'E trả tiền mặt luôn nha..!', 'daduyet'),
(90, '2019-10-19', 7, 'Đơn hàng này công nợ cho e nhé...!', 'daduyet'),
(91, '2019-10-19', 12, 'Giao sớm nhất có thể cho em... :))', 'daduyet'),
(92, '2019-10-20', 12, '', 'dagui'),
(93, '2019-10-20', 7, 'Alo tính dồn công nợ cũ', 'daduyet'),
(94, '2019-10-20', 7, 'Test tổng tiền', 'daduyet');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahanghoa` int(11) NOT NULL,
  `tenhanghoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahanghoa`, `tenhanghoa`, `gia`) VALUES
(5, 'Mỡ trăn hủ', 50000),
(6, 'Mỡ trăn chai', 1000000),
(7, 'Kem rữa mặt', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tentaikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `kieukhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'khachhang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tentaikhoan`, `matkhau`, `hoten`, `diachi`, `sodienthoai`, `ngaytao`, `kieukhachhang`) VALUES
(7, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Bình Hồng Sơn', 'Cần Thơ', '0916524328', '2019-10-15', 'khachhang'),
(12, 'thanhthoai', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thanh Thoại', 'Ninh Kiều, Cần Thơ', '113', '2019-10-17', 'khachhang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maadmin`);

--
-- Indexes for table `chitiethanghoa`
--
ALTER TABLE `chitiethanghoa`
  ADD PRIMARY KEY (`macthh`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`);

--
-- Indexes for table `donhangcho`
--
ALTER TABLE `donhangcho`
  ADD PRIMARY KEY (`madonhangcho`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahanghoa`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `maadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chitiethanghoa`
--
ALTER TABLE `chitiethanghoa`
  MODIFY `macthh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhangcho`
--
ALTER TABLE `donhangcho`
  MODIFY `madonhangcho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
