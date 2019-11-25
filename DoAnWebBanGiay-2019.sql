-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 02:31 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formchucnang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbl_anh`
--

DROP TABLE IF EXISTS `dbl_anh`;
CREATE TABLE IF NOT EXISTS `dbl_anh` (
  `id_anh` int(100) NOT NULL AUTO_INCREMENT,
  `id_sp` int(100) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  PRIMARY KEY (`id_anh`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_anh`
--

INSERT INTO `dbl_anh` (`id_anh`, `id_sp`, `hinhanh`) VALUES
(1, 5, 'download1574485193.jpg'),
(2, 5, 'iphone11-11574485193.jpg'),
(3, 2, 'download1574485344.jpg'),
(4, 2, 'iphone11-11574485344.jpg'),
(5, 2, 'iphone11-21574485345.jpg'),
(6, 2, 'download1574485502.jpg'),
(7, 2, 'iphone11-11574485502.jpg'),
(8, 2, 'iphone11-21574485502.jpg'),
(9, 3, 'download1574485602.jpg'),
(10, 3, 'iphone11-11574485602.jpg'),
(11, 3, 'iphone11-21574485602.jpg'),
(12, 5, 'download1574486505.jpg'),
(13, 5, 'iphone11-11574486505.jpg'),
(14, 5, 'iphone11-21574486505.jpg'),
(15, 5, 'iphone11-41574486505.jpg'),
(16, 5, 'iphone11-51574486505.jpg'),
(17, 10, 'iphone11-11574488878.jpg'),
(18, 10, 'iphone11-21574488878.jpg'),
(19, 13, 'iphone11-41574583260.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_chitiet_sp`
--

DROP TABLE IF EXISTS `dbl_chitiet_sp`;
CREATE TABLE IF NOT EXISTS `dbl_chitiet_sp` (
  `id_chitiet` int(100) NOT NULL AUTO_INCREMENT,
  `mota_sp` text NOT NULL,
  `gia_sp` float NOT NULL,
  `id_sp` int(100) NOT NULL,
  `id_mau` int(100) NOT NULL,
  `id_size` int(100) NOT NULL,
  PRIMARY KEY (`id_chitiet`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_chitiet_sp`
--

INSERT INTO `dbl_chitiet_sp` (`id_chitiet`, `mota_sp`, `gia_sp`, `id_sp`, `id_mau`, `id_size`) VALUES
(1, 'Máº«u Ä‘áº¹p', 600000, 21, 1, 1),
(2, 'Rất đẹp nuôn', 6000000, 5, 1, 3),
(3, 'asss', 600000, 2, 1, 1),
(4, 'rat dep', 130000000, 2, 5, 1),
(5, 'rat dep', 130000000, 2, 5, 1),
(6, 'rat dep', 130000000, 2, 5, 1),
(7, 'dep', 600000, 2, 1, 1),
(8, 'dep', 600000, 2, 1, 1),
(9, 'hc', 600000, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_loaisp`
--

DROP TABLE IF EXISTS `dbl_loaisp`;
CREATE TABLE IF NOT EXISTS `dbl_loaisp` (
  `id_loaisp` int(100) NOT NULL AUTO_INCREMENT,
  `tenloaisp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loaisp`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_loaisp`
--

INSERT INTO `dbl_loaisp` (`id_loaisp`, `tenloaisp`) VALUES
(14, 'Loai 3'),
(9, 'Loai 2'),
(13, 'Loai 1');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_mau`
--

DROP TABLE IF EXISTS `dbl_mau`;
CREATE TABLE IF NOT EXISTS `dbl_mau` (
  `id_mau` int(100) NOT NULL AUTO_INCREMENT,
  `mau` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mau`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_mau`
--

INSERT INTO `dbl_mau` (`id_mau`, `mau`) VALUES
(1, 'red'),
(2, 'blue'),
(3, 'yellow'),
(4, 'pink'),
(5, 'special color');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_sanpham`
--

DROP TABLE IF EXISTS `dbl_sanpham`;
CREATE TABLE IF NOT EXISTS `dbl_sanpham` (
  `id_sp` int(100) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(255) NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_sanpham`
--

INSERT INTO `dbl_sanpham` (`id_sp`, `tensp`, `id_loaisp`) VALUES
(24, 'Bitis Hunter', 14);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_size`
--

DROP TABLE IF EXISTS `dbl_size`;
CREATE TABLE IF NOT EXISTS `dbl_size` (
  `id_size` int(100) NOT NULL AUTO_INCREMENT,
  `size` int(100) NOT NULL,
  PRIMARY KEY (`id_size`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_size`
--

INSERT INTO `dbl_size` (`id_size`, `size`) VALUES
(1, 35),
(2, 36),
(3, 37),
(4, 38),
(5, 39),
(6, 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
