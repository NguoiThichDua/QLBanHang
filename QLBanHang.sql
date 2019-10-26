-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2019 at 07:05 AM
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
(149, 5, 10, NULL, 126),
(150, 7, 30, NULL, 126),
(151, 5, 50, NULL, 127),
(152, 6, 50, NULL, 127),
(153, 5, 50, NULL, 130),
(154, 6, 30, NULL, 130),
(155, 5, 10, NULL, 131),
(156, 6, 20, NULL, 131),
(157, 5, 100, NULL, 132),
(158, 6, 50, NULL, 132),
(159, 7, 200, NULL, 132),
(160, 5, 10, NULL, 134),
(171, 5, 10, NULL, 145),
(172, 8, 10, NULL, 145),
(173, 5, 55, NULL, 146),
(174, 5, 155, NULL, 147),
(175, 5, 25, NULL, 148);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethangton`
--

CREATE TABLE `chitiethangton` (
  `mactht` int(11) NOT NULL,
  `tenhanghoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahangton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethangton`
--

INSERT INTO `chitiethangton` (`mactht`, `tenhanghoa`, `soluong`, `mahangton`) VALUES
(51, 'Mỡ trăn chai', 0, 37),
(52, 'Mỡ trăn hủ', 0, 37),
(55, 'Kem rữa mặt', 20, 40),
(56, 'Mỡ trăn chai', 10, 41),
(57, 'Mỡ trăn hủ', 10, 41);

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
(31, '2019-10-23', '2019-10-11', '1652480201050', 0, 150000, 126, 1250000),
(32, '2019-10-23', '2019-10-09', '1652480201060', 0, 150000, 127, 10000000),
(33, '2019-10-24', '2019-10-12', '1652480201055', 0, 50000, 130, 1350000),
(34, '2019-10-24', '2019-10-16', '1652480201060', 0, 0, 131, 2500000),
(35, '2019-10-24', '2019-10-11', '1652480201069', 0, 150000, 132, 9750000),
(36, '2019-10-25', '2019-10-25', '1652480201065', 0, 50000, 134, 500000);

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
(126, '2019-10-23', 22, 'Đây là đơn hàng đầu tiên', 'daduyet'),
(127, '2019-10-23', 22, 'Duyệt cho em..!', 'daduyet'),
(130, '2019-10-24', 23, 'Hello...! ghi công nợ nha', 'daduyet'),
(131, '2019-10-24', 24, '', 'daduyet'),
(132, '2019-10-24', 22, '', 'daduyet'),
(134, '2019-10-24', 22, '', 'daduyet'),
(145, '2019-10-25', 24, NULL, 'chuagui'),
(146, '2019-10-25', 27, '', 'dagui'),
(147, '2019-10-25', 27, 'Alo', 'dagui'),
(148, '2019-10-25', 23, 'Ahihi', 'dagui');

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahanghoa` int(11) NOT NULL,
  `tenhanghoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahanghoa`, `tenhanghoa`) VALUES
(5, 'Mỡ trăn hủ'),
(6, 'Mỡ trăn chai'),
(7, 'Kem rữa mặt'),
(8, 'Vit kho gung');

-- --------------------------------------------------------

--
-- Table structure for table `hangton`
--

CREATE TABLE `hangton` (
  `mahangton` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `makhachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangton`
--

INSERT INTO `hangton` (`mahangton`, `ngaytao`, `makhachhang`) VALUES
(37, '2019-10-24', 24),
(40, '2019-10-24', 22),
(41, '2019-10-25', 23);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tentaikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'địa chỉ',
  `sodienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tructhuoc` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'trực thuộc',
  `capbac` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` date NOT NULL,
  `kieukhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'khachhang',
  `danghi` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'chưa nghĩ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tentaikhoan`, `matkhau`, `hoten`, `diachi`, `sodienthoai`, `tructhuoc`, `capbac`, `ngaytao`, `kieukhachhang`, `danghi`) VALUES
(22, '0766899363', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Bình Hồng Sơn', 'An Hòa, Châu Thành, An Giang', '0766899363', 'Trường Đại học Tây Đô', 'giamdockinhdoanh', '2019-10-23', 'khachhang', 'chưa nghĩ'),
(23, '0766899364', 'e10adc3949ba59abbe56e057f20f883e', 'Sơn Nguyễn', 'Cần Thơ', '0766899364', 'Trường Đại học Nam Cần Thơ', 'nhaphanphoi', '2019-10-24', 'khachhang', 'chưa nghĩ'),
(24, '0766899365', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thanh Thoại', 'Cần Thơ', '0766899365', 'Trường Đại học Cần Thơ', 'nhaphanphoivang', '2019-10-24', 'khachhang', 'chưa nghĩ'),
(27, '0766899366', 'e10adc3949ba59abbe56e057f20f883e', 'Thanh Bình', 'An Giang', '0766899366', 'trực thuộc', NULL, '2019-10-25', 'khachhang', 'chưa nghĩ');

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
-- Indexes for table `chitiethangton`
--
ALTER TABLE `chitiethangton`
  ADD PRIMARY KEY (`mactht`);

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
-- Indexes for table `hangton`
--
ALTER TABLE `hangton`
  ADD PRIMARY KEY (`mahangton`);

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
  MODIFY `macthh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `chitiethangton`
--
ALTER TABLE `chitiethangton`
  MODIFY `mactht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `donhangcho`
--
ALTER TABLE `donhangcho`
  MODIFY `madonhangcho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hangton`
--
ALTER TABLE `hangton`
  MODIFY `mahangton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
