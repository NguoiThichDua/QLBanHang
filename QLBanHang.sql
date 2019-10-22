-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 12:40 PM
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
(122, 6, 30, NULL, 108),
(123, 5, 20, NULL, 108),
(124, 7, 10, NULL, 108),
(128, 5, 1, NULL, 111),
(129, 5, 10, NULL, 112),
(130, 6, 50, NULL, 113),
(131, 6, 30, NULL, 114),
(132, 7, 10, NULL, 114),
(133, 7, 50, NULL, 115),
(134, 5, 10, NULL, 116),
(135, 6, 50, NULL, 116),
(136, 5, 10, NULL, 117),
(137, 7, 50, NULL, 118),
(138, 5, 10, NULL, 119),
(139, 5, 10, NULL, 120),
(140, 6, 10, NULL, 121),
(141, 7, 20, NULL, 121),
(142, 6, 10, NULL, 122),
(143, 5, 12, NULL, 122),
(144, 7, 50, NULL, 122),
(146, 5, 10, NULL, 123),
(147, 7, 20, NULL, 123);

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
(18, '2019-10-21', '2019-10-10', '1652480201050', 0, 50000, 108, 600000),
(19, '2019-10-21', '2019-10-03', '1652480201055', 0, 200000, 111, 50000),
(20, '2019-10-21', '2019-10-18', '1652480201065', 0, 30000, 112, 50000),
(21, '2019-10-21', '2019-10-08', '1652480201060', 0, 150000, 113, 500000),
(22, '2019-10-21', '2019-10-23', '1652480201055', 0, 15000, 114, 450000),
(23, '2019-10-21', '2019-10-03', '1652480201050', 0, 20000, 115, 250000),
(24, '2019-10-22', '2019-10-03', '1652480201055', 0, 15000, 116, 350000),
(25, '2019-10-22', '2019-10-21', '1652480201050', 0, 15000, 117, 500000),
(26, '2019-10-22', '2019-10-21', '1652480201050', 0, 100005, 118, 750000),
(27, '2019-10-22', '2019-10-01', '1652480201050', 0, 0, 119, 1000000),
(28, '2019-10-22', '2019-10-02', '1652480201050', 0, 950000, 120, 5000000),
(29, '2019-10-22', '2019-10-24', '1652480201050', 0, 0, 121, 300000);

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
(108, '2019-10-21', 17, 'Ghi công nợ', 'daduyet'),
(111, '2019-10-21', 18, '', 'daduyet'),
(112, '2019-10-21', 17, '', 'daduyet'),
(113, '2019-10-21', 17, '', 'daduyet'),
(114, '2019-10-21', 19, 'Hello', 'daduyet'),
(115, '2019-10-21', 19, '', 'daduyet'),
(116, '2019-10-22', 20, 'Đây là cái ghi chú của tui nè', 'daduyet'),
(117, '2019-10-22', 18, 'Đây là đơn hàng chờ mới nhất', 'daduyet'),
(118, '2019-10-22', 18, '22-10-2019', 'daduyet'),
(119, '2019-10-22', 18, '', 'daduyet'),
(120, '2019-10-22', 18, 'Mới nhất nè', 'daduyet'),
(121, '2019-10-22', 20, '22-10-2019', 'daduyet'),
(122, '2019-10-22', 20, NULL, 'chuagui'),
(123, '2019-10-22', 17, '', 'dagui');

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
  `tructhuoc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `kieukhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'khachhang',
  `danghi` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'chưa nghĩ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tentaikhoan`, `matkhau`, `hoten`, `diachi`, `sodienthoai`, `tructhuoc`, `capbac`, `ngaytao`, `kieukhachhang`, `danghi`) VALUES
(17, '0766899363', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thanh Thoại', 'An Bình, Ninh Kiều, Cần Thơ', '0766899363', 'Trường Đại học Tây Đô', 'giamdockinhdoanh', '2019-10-21', 'khachhang', 'chưa nghĩ'),
(18, '0939505815', 'e10adc3949ba59abbe56e057f20f883e', 'Sơn Nguyễn', 'An Hòa, Châu Thành, An Giang', '0939505815', 'Trường Đại học Cần Thơ', 'nhaphanphoikimcuong', '2019-10-21', 'khachhang', 'chưa nghĩ'),
(19, '0939505816', 'e10adc3949ba59abbe56e057f20f883e', 'Sup Thảo Mai', 'Cần Thơ', '0939505816', 'Trường Đại học Cần Thơ', 'chinhanh', '2019-10-21', 'khachhang', 'chưa nghĩ'),
(20, '0766899364', 'e10adc3949ba59abbe56e057f20f883e', 'Sup Thảo Mai', 'Cần Thơ', '0766899364', 'Trường Đại học Cần Thơ', 'nhaphanphoi', '2019-10-22', 'khachhang', 'chưa nghĩ'),
(21, '0766899365', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Bình Hồng Sơn', 'Ninh Kiều, Cần Thơ', '0766899365', 'Trường Đại học Nam Cần Thơ', 'tongdaili', '2019-10-22', 'khachhang', 'chưa nghĩ');

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
  MODIFY `macthh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `donhangcho`
--
ALTER TABLE `donhangcho`
  MODIFY `madonhangcho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
