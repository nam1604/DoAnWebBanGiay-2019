-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 06:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanwebbangiay-2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbl_admin`
--

CREATE TABLE `dbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_admin`
--

INSERT INTO `dbl_admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_anh`
--

CREATE TABLE `dbl_anh` (
  `id_anh` int(100) NOT NULL,
  `id_chitiet` int(100) NOT NULL,
  `hinhanh` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_anh`
--

INSERT INTO `dbl_anh` (`id_anh`, `id_chitiet`, `hinhanh`) VALUES
(39, 28, '0df721e60727fb4b1be9310132da0dae1575017637.jpg'),
(40, 28, '13b80d1f5b7efb2941d81777b161808d1575017637.jpg'),
(41, 28, '477017ca9a38813a3d1b181a7283383c1575017637.jpg'),
(42, 28, 'a0f9b94cc8976e947277960e164216141575017637.jpg'),
(43, 29, 'B96286_01_standard1575017768.jpg'),
(44, 29, 'B96286_02_standard1575017768.jpg'),
(45, 29, 'B96286_03_standard1575017768.jpg'),
(46, 29, 'B96286_04_standard1575017768.jpg'),
(51, 31, 'EH0173_01_standard1575017985.jpg'),
(52, 31, 'EH0173_02_standard1575017985.jpg'),
(53, 31, 'EH0173_03_standard1575017985.jpg'),
(54, 31, 'EH0173_04_standard1575017985.jpg'),
(55, 32, 'G27706_01_standard1575018042.jpg'),
(56, 32, 'G27706_02_standard1575018042.jpg'),
(57, 32, 'G27706_03_standard1575018042.jpg'),
(58, 32, 'G27706_04_standard1575018042.jpg'),
(59, 33, 'G27707_01_standard1575018085.jpg'),
(60, 33, 'G27707_02_standard1575018085.jpg'),
(61, 33, 'G27707_03_standard1575018085.jpg'),
(62, 33, 'G27707_04_standard1575018085.jpg'),
(63, 34, 'EE9843_01_standard1575018232.jpg'),
(64, 34, 'EE9843_02_standard1575018232.jpg'),
(65, 34, 'EE9843_03_standard1575018232.jpg'),
(66, 34, 'EE9843_04_standard1575018232.jpg'),
(67, 35, 'EE9845_01_standard1575018268.jpg'),
(68, 35, 'EE9845_02_standard1575018268.jpg'),
(69, 35, 'EE9845_03_standard1575018268.jpg'),
(70, 35, 'EE9845_04_standard1575018268.jpg'),
(71, 36, 'EE9846_01_standard1575018299.jpg'),
(72, 36, 'EE9846_02_standard1575018299.jpg'),
(73, 36, 'EE9846_03_standard1575018299.jpg'),
(74, 36, 'EE9846_04_standard1575018299.jpg'),
(79, 38, 'G27509_01_standard1575018429.jpg'),
(80, 38, 'G27509_02_standard1575018429.jpg'),
(81, 38, 'G27509_03_standard1575018429.jpg'),
(82, 38, 'G27509_04_standard1575018429.jpg'),
(83, 39, 'EF1339_01_standard1575018515.jpg'),
(84, 39, 'EF1339_02_standard1575018515.jpg'),
(85, 39, 'EF1339_03_standard1575018515.jpg'),
(86, 39, 'EF1339_04_standard1575018515.jpg'),
(87, 37, 'EF1343_01_standard1575018533.jpg'),
(88, 37, 'EF1343_02_standard1575018533.jpg'),
(89, 37, 'EF1343_03_standard1575018533.jpg'),
(90, 37, 'EF1343_04_standard1575018533.jpg'),
(91, 40, 'EF1344_01_standard1575018584.jpg'),
(92, 40, 'EF1344_02_standard1575018584.jpg'),
(93, 40, 'EF1344_03_standard1575018584.jpg'),
(94, 40, 'EF1344_04_standard1575018584.jpg'),
(103, 43, 'EE6254_01_standard1575018798.jpg'),
(104, 43, 'EE6254_02_standard1575018798.jpg'),
(105, 43, 'EE6254_03_standard1575018798.jpg'),
(106, 43, 'EE6254_04_standard1575018798.jpg'),
(107, 44, 'EE6255_01_standard1575018890.jpg'),
(108, 44, 'EE6255_02_standard1575018890.jpg'),
(109, 44, 'EE6255_03_standard1575018890.jpg'),
(110, 44, 'EE6255_04_standard1575018890.jpg'),
(111, 45, 'EE6255_01_standard1575018936.jpg'),
(112, 45, 'EE6255_02_standard1575018936.jpg'),
(113, 45, 'EE6255_03_standard1575018936.jpg'),
(114, 45, 'EE6255_04_standard1575018936.jpg'),
(115, 46, 'EE6255_01_standard1575018942.jpg'),
(116, 46, 'EE6255_02_standard1575018942.jpg'),
(117, 46, 'EE6255_03_standard1575018942.jpg'),
(118, 46, 'EE6255_04_standard1575018942.jpg'),
(119, 47, '0df721e60727fb4b1be9310132da0dae1575019134.jpg'),
(120, 47, '13b80d1f5b7efb2941d81777b161808d1575019134.jpg'),
(121, 47, '477017ca9a38813a3d1b181a7283383c1575019134.jpg'),
(122, 47, 'a0f9b94cc8976e947277960e164216141575019134.jpg'),
(123, 48, '0df721e60727fb4b1be9310132da0dae1575019190.jpg'),
(124, 48, '13b80d1f5b7efb2941d81777b161808d1575019190.jpg'),
(125, 48, '477017ca9a38813a3d1b181a7283383c1575019190.jpg'),
(126, 48, 'a0f9b94cc8976e947277960e164216141575019190.jpg'),
(127, 49, 'B96286_01_standard1575019293.jpg'),
(128, 49, 'B96286_02_standard1575019293.jpg'),
(129, 49, 'B96286_03_standard1575019293.jpg'),
(130, 49, 'B96286_04_standard1575019293.jpg'),
(131, 50, 'B96286_01_standard1575019317.jpg'),
(132, 50, 'B96286_02_standard1575019317.jpg'),
(133, 50, 'B96286_03_standard1575019317.jpg'),
(134, 50, 'B96286_04_standard1575019317.jpg'),
(135, 51, 'CQ3176_01_standard1575019392.jpg'),
(136, 51, 'CQ3176_02_standard1575019392.jpg'),
(137, 51, 'CQ3176_03_standard1575019392.jpg'),
(138, 51, 'CQ3176_04_standard1575019392.jpg'),
(143, 53, 'EF1343_01_standard1575019511.jpg'),
(144, 53, 'EF1343_02_standard1575019511.jpg'),
(145, 53, 'EF1343_03_standard1575019511.jpg'),
(146, 53, 'EF1343_04_standard1575019511.jpg'),
(147, 54, 'EF1343_01_standard1575019517.jpg'),
(148, 54, 'EF1343_02_standard1575019517.jpg'),
(149, 54, 'EF1343_03_standard1575019517.jpg'),
(150, 54, 'EF1343_04_standard1575019517.jpg'),
(151, 58, 'EE4895_01_standard1576155819.jpg'),
(152, 58, 'EE4895_02_standard1576155820.jpg'),
(153, 58, 'EE4895_03_standard1576155820.jpg'),
(154, 58, 'EE4895_04_standard1576155820.jpg'),
(155, 59, 'EE4895_01_standard1576155840.jpg'),
(156, 59, 'EE4895_02_standard1576155840.jpg'),
(157, 59, 'EE4895_03_standard1576155840.jpg'),
(158, 59, 'EE4895_04_standard1576155840.jpg'),
(159, 60, 'EE4895_01_standard1576155850.jpg'),
(160, 60, 'EE4895_02_standard1576155850.jpg'),
(161, 60, 'EE4895_03_standard1576155850.jpg'),
(162, 60, 'EE4895_04_standard1576155850.jpg'),
(163, 61, 'EE4896_01_standard1576155862.jpg'),
(164, 61, 'EE4896_02_standard1576155862.jpg'),
(165, 61, 'EE4896_03_standard1576155862.jpg'),
(166, 61, 'EE4896_04_standard1576155862.jpg'),
(167, 62, 'EE4896_01_standard1576155871.jpg'),
(168, 62, 'EE4896_02_standard1576155871.jpg'),
(169, 62, 'EE4896_03_standard1576155871.jpg'),
(170, 62, 'EE4896_04_standard1576155871.jpg'),
(171, 63, 'EE4896_01_standard1576155881.jpg'),
(172, 63, 'EE4896_02_standard1576155881.jpg'),
(173, 63, 'EE4896_03_standard1576155881.jpg'),
(174, 63, 'EE4896_04_standard1576155881.jpg'),
(175, 55, 'EF0581_01_standard1576155905.jpg'),
(176, 55, 'EF0581_02_standard1576155905.jpg'),
(177, 55, 'EF0581_03_standard1576155905.jpg'),
(178, 55, 'EF0581_04_standard1576155905.jpg'),
(179, 56, 'EF0581_01_standard1576155913.jpg'),
(180, 56, 'EF0581_02_standard1576155913.jpg'),
(181, 56, 'EF0581_03_standard1576155913.jpg'),
(182, 56, 'EF0581_04_standard1576155913.jpg'),
(183, 57, 'EF0581_01_standard1576155936.jpg'),
(184, 57, 'EF0581_02_standard1576155936.jpg'),
(185, 57, 'EF0581_03_standard1576155936.jpg'),
(186, 57, 'EF0581_04_standard1576155936.jpg'),
(187, 64, 'EF0708_01_standard1576156168.jpg'),
(188, 64, 'EF0708_02_standard1576156168.jpg'),
(189, 64, 'EF0708_03_standard1576156168.jpg'),
(190, 64, 'EF0708_04_standard1576156169.jpg'),
(191, 65, 'EF0708_01_standard1576156177.jpg'),
(192, 65, 'EF0708_02_standard1576156177.jpg'),
(193, 65, 'EF0708_03_standard1576156177.jpg'),
(194, 65, 'EF0708_04_standard1576156177.jpg'),
(195, 66, 'EF0708_01_standard1576156186.jpg'),
(196, 66, 'EF0708_02_standard1576156186.jpg'),
(197, 66, 'EF0708_03_standard1576156186.jpg'),
(198, 66, 'EF0708_04_standard1576156186.jpg'),
(199, 67, 'EG0944_01_standard1576156195.jpg'),
(200, 67, 'EG0944_02_standard1576156195.jpg'),
(201, 67, 'EG0944_03_standard1576156195.jpg'),
(202, 67, 'EG0944_04_standard1576156195.jpg'),
(203, 68, 'EG0944_01_standard1576156208.jpg'),
(204, 68, 'EG0944_02_standard1576156208.jpg'),
(205, 68, 'EG0944_03_standard1576156208.jpg'),
(206, 68, 'EG0944_04_standard1576156208.jpg'),
(207, 69, 'EG0944_01_standard1576156219.jpg'),
(208, 69, 'EG0944_02_standard1576156219.jpg'),
(209, 69, 'EG0944_03_standard1576156219.jpg'),
(210, 69, 'EG0944_04_standard1576156219.jpg'),
(217, 42, 'EE6254_01_standard157501872115761578341576157892.jpg'),
(218, 42, 'EE6254_02_standard15750187981576157892.jpg'),
(219, 42, 'EE6254_03_standard15750187721576157892.jpg'),
(220, 42, 'EE6254_04_standard15750187211576157892.jpg'),
(225, 70, 'EG0979_01_standard1576158547.jpg'),
(226, 70, 'EG0979_02_standard1576158547.jpg'),
(227, 70, 'EG0979_03_standard1576158547.jpg'),
(228, 70, 'EG0979_04_standard1576158547.jpg'),
(229, 71, 'EG0979_01_standard1576158553.jpg'),
(230, 71, 'EG0979_02_standard1576158553.jpg'),
(231, 71, 'EG0979_03_standard1576158553.jpg'),
(232, 71, 'EG0979_04_standard1576158553.jpg'),
(237, 72, 'EG0978_01_standard1576158583.jpg'),
(238, 72, 'EG0978_02_standard1576158583.jpg'),
(239, 72, 'EG0978_03_standard1576158583.jpg'),
(240, 72, 'EG0978_04_standard1576158583.jpg'),
(241, 73, 'EG0978_01_standard1576158590.jpg'),
(242, 73, 'EG0978_02_standard1576158590.jpg'),
(243, 73, 'EG0978_03_standard1576158590.jpg'),
(244, 73, 'EG0978_04_standard1576158590.jpg'),
(249, 75, 'EG1837_01_standard1576158827.jpg'),
(250, 75, 'EG1837_02_standard1576158827.jpg'),
(251, 75, 'EG1837_03_standard1576158827.jpg'),
(252, 75, 'EG1837_04_standard1576158827.jpg'),
(253, 76, 'EG1837_01_standard1576158832.jpg'),
(254, 76, 'EG1837_02_standard1576158832.jpg'),
(255, 76, 'EG1837_03_standard1576158832.jpg'),
(256, 76, 'EG1837_04_standard1576158832.jpg'),
(257, 77, 'EG1837_01_standard1576158838.jpg'),
(258, 77, 'EG1837_02_standard1576158838.jpg'),
(259, 77, 'EG1837_03_standard1576158838.jpg'),
(260, 77, 'EG1837_04_standard1576158838.jpg'),
(261, 78, 'EF1163_01_standard1576159015.jpg'),
(262, 78, 'EF1163_02_standard1576159015.jpg'),
(263, 78, 'EF1163_03_standard1576159015.jpg'),
(264, 78, 'EF1163_04_standard1576159015.jpg'),
(265, 79, 'EF1163_01_standard1576159021.jpg'),
(266, 79, 'EF1163_02_standard1576159021.jpg'),
(267, 79, 'EF1163_03_standard1576159021.jpg'),
(268, 79, 'EF1163_04_standard1576159021.jpg'),
(269, 80, 'EF1163_01_standard1576159027.jpg'),
(270, 80, 'EF1163_02_standard1576159027.jpg'),
(271, 80, 'EF1163_03_standard1576159027.jpg'),
(272, 80, 'EF1163_04_standard1576159027.jpg'),
(273, 81, 'EF1163_01_standard1576159033.jpg'),
(274, 81, 'EF1163_02_standard1576159033.jpg'),
(275, 81, 'EF1163_03_standard1576159033.jpg'),
(276, 81, 'EF1163_04_standard1576159033.jpg'),
(277, 82, 'EF1163_01_standard1576159040.jpg'),
(278, 82, 'EF1163_02_standard1576159040.jpg'),
(279, 82, 'EF1163_03_standard1576159040.jpg'),
(280, 82, 'EF1163_04_standard1576159040.jpg'),
(281, 83, 'EG2545_01_standard1576159337.jpg'),
(282, 83, 'EG2545_02_standard1576159337.jpg'),
(283, 83, 'EG2545_03_standard1576159337.jpg'),
(284, 83, 'EG2545_04_standard1576159337.jpg'),
(285, 84, 'EG2545_01_standard1576159349.jpg'),
(286, 84, 'EG2545_02_standard1576159349.jpg'),
(287, 84, 'EG2545_03_standard1576159349.jpg'),
(288, 84, 'EG2545_04_standard1576159349.jpg'),
(293, 85, 'F36543_01_standard1576159374.jpg'),
(294, 85, 'F36543_02_standard1576159374.jpg'),
(295, 85, 'F36543_03_standard1576159374.jpg'),
(296, 85, 'F36543_04_standard1576159374.jpg'),
(297, 86, 'F36543_01_standard1576159384.jpg'),
(298, 86, 'F36543_02_standard1576159384.jpg'),
(299, 86, 'F36543_03_standard1576159384.jpg'),
(300, 86, 'F36543_04_standard1576159384.jpg'),
(301, 87, 'EE4030_01_standard1576159637.jpg'),
(302, 87, 'EE4030_02_standard1576159637.jpg'),
(303, 87, 'EE4030_03_standard1576159637.jpg'),
(304, 87, 'EE4030_04_standard1576159637.jpg'),
(305, 88, 'EE4030_01_standard1576159643.jpg'),
(306, 88, 'EE4030_02_standard1576159643.jpg'),
(307, 88, 'EE4030_03_standard1576159643.jpg'),
(308, 88, 'EE4030_04_standard1576159643.jpg'),
(309, 89, 'EF0914_01_standard1576159649.jpg'),
(310, 89, 'EF0914_02_standard1576159649.jpg'),
(311, 89, 'EF0914_03_standard1576159649.jpg'),
(312, 89, 'EF0914_04_standard1576159649.jpg'),
(313, 90, 'EF0914_01_standard1576159657.jpg'),
(314, 90, 'EF0914_02_standard1576159657.jpg'),
(315, 90, 'EF0914_03_standard1576159657.jpg'),
(316, 90, 'EF0914_04_standard1576159657.jpg'),
(317, 91, 'G27186_01_standard1576159786.jpg'),
(318, 91, 'G27186_02_standard1576159786.jpg'),
(319, 91, 'G27186_03_standard1576159786.jpg'),
(320, 91, 'G27186_04_standard1576159786.jpg'),
(321, 92, 'G27186_01_standard1576159792.jpg'),
(322, 92, 'G27186_02_standard1576159792.jpg'),
(323, 92, 'G27186_03_standard1576159792.jpg'),
(324, 92, 'G27186_04_standard1576159792.jpg'),
(325, 41, 'EE6254_01_standard1575018721157615783415761578921576159946.jpg'),
(326, 41, 'EE6254_02_standard15750187721576159946.jpg'),
(327, 41, 'EE6254_03_standard157501877215761578921576159946.jpg'),
(328, 41, 'EE6254_04_standard15750187721576159946.jpg'),
(341, 30, 'CQ3176_02_standard15750193921576160090.jpg'),
(342, 30, 'CQ3176_03_standard157501786815761600701576160111.jpg'),
(343, 30, 'CQ3176_04_standard157501939215761600091576160111.jpg'),
(344, 30, 'CQ3176_01_standard157501939215761600411576160120.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_chitiet_sp`
--

CREATE TABLE `dbl_chitiet_sp` (
  `id_chitiet` int(100) NOT NULL,
  `id_mau` int(100) NOT NULL,
  `mota_sp` text NOT NULL,
  `maso_sanpham` varchar(255) NOT NULL,
  `soluong` int(100) NOT NULL,
  `gia_sp` float NOT NULL,
  `id_sp` int(100) NOT NULL,
  `id_size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_chitiet_sp`
--

INSERT INTO `dbl_chitiet_sp` (`id_chitiet`, `id_mau`, `mota_sp`, `maso_sanpham`, `soluong`, `gia_sp`, `id_sp`, `id_size`) VALUES
(28, 21, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1103', 20, 5000000, 41, 7),
(29, 25, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1102', 15, 5100000, 41, 8),
(30, 23, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1101', 15, 4900000, 41, 8),
(31, 23, 'Lấy cảm hứng từ Star Wars™, đề cao sự thoải mái và hiệu quả. Được thiết kế cho hoạt động chạy hàng ngày, mẫu giày này có thân giày bằng vải dệt mềm mại với các chi tiết phủ ngoài bằng da. Lớp đệm đàn hồi kết hợp với đế ngoài linh hoạt chuyển hồi năng lượng trong mỗi bước chạy.', 'B2001', 20, 3000000, 42, 7),
(32, 24, 'Lấy cảm hứng từ Star Wars™, đề cao sự thoải mái và hiệu quả. Được thiết kế cho hoạt động chạy hàng ngày, mẫu giày này có thân giày bằng vải dệt mềm mại với các chi tiết phủ ngoài bằng da. Lớp đệm đàn hồi kết hợp với đế ngoài linh hoạt chuyển hồi năng lượng trong mỗi bước chạy.', 'B2002', 13, 4200000, 42, 7),
(33, 20, 'Lấy cảm hứng từ Star Wars™, đề cao sự thoải mái và hiệu quả. Được thiết kế cho hoạt động chạy hàng ngày, mẫu giày này có thân giày bằng vải dệt mềm mại với các chi tiết phủ ngoài bằng da. Lớp đệm đàn hồi kết hợp với đế ngoài linh hoạt chuyển hồi năng lượng trong mỗi bước chạy.', 'B2003', 16, 3500000, 42, 8),
(34, 20, 'Tiến xa hơn, nhanh hơn với mẫu giày chạy bộ mang lại năng lượng thích ứng cho mỗi sải bước này. Thân giày bằng vải lưới thoáng khí có các vùng nâng đỡ để tăng thêm sự ổn định khi di chuyển sang hai bên. Công nghệ Carbon 4D ở đế giữa mang đến những bước chạy gọn ghẽ và độ chuyển hồi năng lượng có kiểm soát. Đế ngoài bằng cao su bền bỉ cho độ bám vượt trội.', 'C3111', 20, 2000000, 44, 8),
(35, 25, 'Tiến xa hơn, nhanh hơn với mẫu giày chạy bộ mang lại năng lượng thích ứng cho mỗi sải bước này. Thân giày bằng vải lưới thoáng khí có các vùng nâng đỡ để tăng thêm sự ổn định khi di chuyển sang hai bên. Công nghệ Carbon 4D ở đế giữa mang đến những bước chạy gọn ghẽ và độ chuyển hồi năng lượng có kiểm soát. Đế ngoài bằng cao su bền bỉ cho độ bám vượt trội.', 'C3112', 12, 2100000, 44, 8),
(36, 23, 'Tiến xa hơn, nhanh hơn với mẫu giày chạy bộ mang lại năng lượng thích ứng cho mỗi sải bước này. Thân giày bằng vải lưới thoáng khí có các vùng nâng đỡ để tăng thêm sự ổn định khi di chuyển sang hai bên. Công nghệ Carbon 4D ở đế giữa mang đến những bước chạy gọn ghẽ và độ chuyển hồi năng lượng có kiểm soát. Đế ngoài bằng cao su bền bỉ cho độ bám vượt trội.', 'C3113', 11, 2100000, 44, 7),
(37, 21, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 20, 3600000, 45, 8),
(38, 23, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 23, 4000000, 45, 8),
(39, 20, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 13, 3499000, 45, 8),
(40, 24, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 15, 3999000, 45, 8),
(41, 20, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 4),
(42, 20, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 5),
(43, 20, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 6),
(44, 24, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 4),
(45, 24, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 4),
(46, 24, 'Kết hợp giữa nét hoài cổ với sự cải tiến hiện đại, đôi giày theo phong cách đường phố này đã làm hồi sinh phong cách cổ điển bằng những chất liệu tươi mới. Bên cạnh chất liệu vải lưới và da lộn, đôi giày thể thao này còn có lớp đệm chuyển hồi năng lượng và hệ thống Torsion Bar hình chữ X tăng thêm độ ổn định. Các chi tiết phản quang tạo thêm điểm bắt sáng.', 'NN001', 13, 3000000, 46, 6),
(47, 21, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1103', 20, 5000000, 41, 8),
(48, 21, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1103', 20, 5000000, 41, 9),
(49, 25, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1102', 15, 5100000, 41, 9),
(50, 25, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1102', 15, 5100000, 41, 6),
(51, 23, 'Tự tin xuất phát với khả năng đàn hồi tối ưu của mẫu giày chạy đột phá này. Đế giữa công nghệ Boost và đế ngoài linh hoạt kết hợp với năng lượng của chính bạn mang đến cảm giác hoàn toàn tự tin trong lần chạy kế tiếp.  Công nghệ Tailored Fibre ', 'A1101', 15, 4900000, 41, 7),
(53, 21, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 20, 3600000, 45, 7),
(54, 21, 'Mẫu giày bằng da cao cấp mang độ thoải mái và hiệu quả của công nghệ Ultraboost. Đôi giày chạy bộ này được thiết kế với thân trên bằng da mềm. Đế ngoài mềm dẻo chuyển động hài hòa với lớp đệm đàn hồi, mang đến những bước chạy êm ái và tràn đầy năng lượng.', 'U1021', 20, 3600000, 45, 9),
(55, 24, 'Mẫu giày lấy cảm hứng từ môn trượt ván này tôn vinh phong cách trên ván trượt với thiết kế giống kiểu dáng của những đôi giày lưu hóa cổ điển. Được tạo ra để cùng bạn đi đến mọi ngóc ngách, đôi giày mang đến sự linh hoạt và thoải mái với đế ngoài bằng cao su và miếng lót giày nhẹ bằng chất liệu EVA. 3 Sọc Kẻ trông giống như chất liệu da trên thân giày bằng vải canvas mang lại nét độc đáo cho đôi giày', 'HEA01', 10, 1300000, 47, 2),
(56, 24, 'Mẫu giày lấy cảm hứng từ môn trượt ván này tôn vinh phong cách trên ván trượt với thiết kế giống kiểu dáng của những đôi giày lưu hóa cổ điển. Được tạo ra để cùng bạn đi đến mọi ngóc ngách, đôi giày mang đến sự linh hoạt và thoải mái với đế ngoài bằng cao su và miếng lót giày nhẹ bằng chất liệu EVA. 3 Sọc Kẻ trông giống như chất liệu da trên thân giày bằng vải canvas mang lại nét độc đáo cho đôi giày', 'HEA01', 10, 1300000, 47, 3),
(57, 24, 'Mẫu giày lấy cảm hứng từ môn trượt ván này tôn vinh phong cách trên ván trượt với thiết kế giống kiểu dáng của những đôi giày lưu hóa cổ điển. Được tạo ra để cùng bạn đi đến mọi ngóc ngách, đôi giày mang đến sự linh hoạt và thoải mái với đế ngoài bằng cao su và miếng lót giày nhẹ bằng chất liệu EVA. 3 Sọc Kẻ trông giống như chất liệu da trên thân giày bằng vải canvas mang lại nét độc đáo cho đôi giày', 'HEA01', 9, 1300000, 47, 4),
(58, 20, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 13, 2300000, 48, 2),
(59, 20, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 9, 2300000, 48, 3),
(60, 20, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 13, 2300000, 48, 4),
(61, 23, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 10, 2300000, 48, 2),
(62, 23, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 13, 2300000, 48, 3),
(63, 23, 'Được đặt theo tên vận động viên hai lần vô địch Grand Slam và là một trong những tay vợt hay nhất mọi thời đại, giày tập Stan Smith đã trở thành biểu tượng của phong cách thể thao toàn cầu nhờ thiết kế tối giản, thuần khiết. Mẫu giày này làm mới thiết kế kinh điển ấy với họa tiết đầy màu sắc trên miếng kéo gót. Thân giày bằng da đơn giản và 3 Sọc Kẻ đục lỗ giúp giữ nguyên phong cách đậm chất adidas.', 'STA01', 10, 2300000, 48, 4),
(64, 20, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 20, 3500000, 49, 3),
(65, 20, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 20, 3500000, 49, 4),
(66, 20, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 20, 3500000, 49, 5),
(67, 24, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 10, 3500000, 49, 4),
(68, 24, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 9, 3500000, 49, 5),
(69, 24, 'Khi xe buýt vừa thả hai mươi học sinh xuống ngay trước mặt bạn. Đôi giày chạy adidas này được thiết kế giúp chuyển hướng nhanh chóng để vượt qua các thách thức của địa hình thành phố. Mũi giày rộng ngang tăng cường độ ổn định, cùng lớp đệm đàn hồi trợ lực cho sải bước của bạn.', 'SS01', 13, 3500000, 49, 6),
(70, 20, 'Cảm nhận nhịp đập đô thị trong từng bước chạy. Đôi giày adidas này có thân giày bằng vải dệt kim co giãn ôm vừa bàn chân như đang đi tất, cùng với mũi giày bản rộng giúp tăng cường độ ổn định. Lớp đệm đàn hồi cho cảm giác vững chắc và giúp nâng đỡ khi tránh xe đạp hay chạy lên vỉa hè.', 'PS01', 13, 2200000, 51, 4),
(71, 20, 'Cảm nhận nhịp đập đô thị trong từng bước chạy. Đôi giày adidas này có thân giày bằng vải dệt kim co giãn ôm vừa bàn chân như đang đi tất, cùng với mũi giày bản rộng giúp tăng cường độ ổn định. Lớp đệm đàn hồi cho cảm giác vững chắc và giúp nâng đỡ khi tránh xe đạp hay chạy lên vỉa hè.', 'PS01', 20, 2200000, 51, 6),
(72, 24, 'Cảm nhận nhịp đập đô thị trong từng bước chạy. Đôi giày adidas này có thân giày bằng vải dệt kim co giãn ôm vừa bàn chân như đang đi tất, cùng với mũi giày bản rộng giúp tăng cường độ ổn định. Lớp đệm đàn hồi cho cảm giác vững chắc và giúp nâng đỡ khi tránh xe đạp hay chạy lên vỉa hè.', 'PS01', 9, 2200000, 51, 4),
(73, 24, 'Cảm nhận nhịp đập đô thị trong từng bước chạy. Đôi giày adidas này có thân giày bằng vải dệt kim co giãn ôm vừa bàn chân như đang đi tất, cùng với mũi giày bản rộng giúp tăng cường độ ổn định. Lớp đệm đàn hồi cho cảm giác vững chắc và giúp nâng đỡ khi tránh xe đạp hay chạy lên vỉa hè.', 'PS01', 9, 2200000, 51, 5),
(75, 24, 'adidas đã hợp tác với Pharrell Williams để thiết kế nên mẫu giày chạy bộ chốn thành thị này. Thân trên giày có lớp lưới siêu nhẹ và thoáng khí. Đế ngoài linh hoạt kết hợp với lớp đệm đàn hồi cho bạn những bước chạy êm ái và đầy năng lượng. Hình ảnh mang thông điệp tích cực tô điểm mũi giày.', 'SLH01', 10, 3800000, 53, 4),
(76, 24, 'adidas đã hợp tác với Pharrell Williams để thiết kế nên mẫu giày chạy bộ chốn thành thị này. Thân trên giày có lớp lưới siêu nhẹ và thoáng khí. Đế ngoài linh hoạt kết hợp với lớp đệm đàn hồi cho bạn những bước chạy êm ái và đầy năng lượng. Hình ảnh mang thông điệp tích cực tô điểm mũi giày.', 'SLH01', 10, 3800000, 53, 5),
(77, 24, 'adidas đã hợp tác với Pharrell Williams để thiết kế nên mẫu giày chạy bộ chốn thành thị này. Thân trên giày có lớp lưới siêu nhẹ và thoáng khí. Đế ngoài linh hoạt kết hợp với lớp đệm đàn hồi cho bạn những bước chạy êm ái và đầy năng lượng. Hình ảnh mang thông điệp tích cực tô điểm mũi giày.', 'SLH01', 9, 3800000, 53, 6),
(78, 20, 'Thoải mái tập luyện theo mọi chiều hướng. Mẫu giày chạy adidas này nâng đỡ đôi chân bạn trong quá trình tập luyện cường độ cao. Thân giày bằng vải lưới với kiểu dáng ôm sát bàn chân như một đôi tất. Lớp đệm mật độ kép mang đến cảm giác thoải mái và ổn định cho các động tác cắt nhanh và di chuyển sang ngang.', 'AP01', 13, 3500000, 54, 2),
(79, 20, 'Thoải mái tập luyện theo mọi chiều hướng. Mẫu giày chạy adidas này nâng đỡ đôi chân bạn trong quá trình tập luyện cường độ cao. Thân giày bằng vải lưới với kiểu dáng ôm sát bàn chân như một đôi tất. Lớp đệm mật độ kép mang đến cảm giác thoải mái và ổn định cho các động tác cắt nhanh và di chuyển sang ngang.', 'AP01', 9, 3500000, 54, 4),
(80, 20, 'Thoải mái tập luyện theo mọi chiều hướng. Mẫu giày chạy adidas này nâng đỡ đôi chân bạn trong quá trình tập luyện cường độ cao. Thân giày bằng vải lưới với kiểu dáng ôm sát bàn chân như một đôi tất. Lớp đệm mật độ kép mang đến cảm giác thoải mái và ổn định cho các động tác cắt nhanh và di chuyển sang ngang.', 'AP01', 20, 3500000, 54, 6),
(81, 20, 'Thoải mái tập luyện theo mọi chiều hướng. Mẫu giày chạy adidas này nâng đỡ đôi chân bạn trong quá trình tập luyện cường độ cao. Thân giày bằng vải lưới với kiểu dáng ôm sát bàn chân như một đôi tất. Lớp đệm mật độ kép mang đến cảm giác thoải mái và ổn định cho các động tác cắt nhanh và di chuyển sang ngang.', 'AP01', 10, 3500000, 54, 5),
(82, 20, 'Thoải mái tập luyện theo mọi chiều hướng. Mẫu giày chạy adidas này nâng đỡ đôi chân bạn trong quá trình tập luyện cường độ cao. Thân giày bằng vải lưới với kiểu dáng ôm sát bàn chân như một đôi tất. Lớp đệm mật độ kép mang đến cảm giác thoải mái và ổn định cho các động tác cắt nhanh và di chuyển sang ngang.', 'AP01', 9, 3500000, 54, 3),
(83, 20, 'Mẫu giày chạy đa năng này dành cho những em bé có mục tiêu to lớn. Giày được may bằng vải lưới bền và thân giày có chất liệu giống da cộng với khung giữa bàn chân cho cảm giác ổn định và nâng đỡ. Lớp đệm nhẹ nhàng giúp duy trì sự thoải mái.', 'RF01', 9, 1200000, 50, 11),
(84, 20, 'Mẫu giày chạy đa năng này dành cho những em bé có mục tiêu to lớn. Giày được may bằng vải lưới bền và thân giày có chất liệu giống da cộng với khung giữa bàn chân cho cảm giác ổn định và nâng đỡ. Lớp đệm nhẹ nhàng giúp duy trì sự thoải mái.', 'RF01', 9, 1200000, 50, 12),
(85, 25, 'Mẫu giày chạy đa năng này dành cho những em bé có mục tiêu to lớn. Giày được may bằng vải lưới bền và thân giày có chất liệu giống da cộng với khung giữa bàn chân cho cảm giác ổn định và nâng đỡ. Lớp đệm nhẹ nhàng giúp duy trì sự thoải mái.', 'RF01', 10, 1200000, 50, 11),
(86, 25, 'Mẫu giày chạy đa năng này dành cho những em bé có mục tiêu to lớn. Giày được may bằng vải lưới bền và thân giày có chất liệu giống da cộng với khung giữa bàn chân cho cảm giác ổn định và nâng đỡ. Lớp đệm nhẹ nhàng giúp duy trì sự thoải mái.', 'RF01', 10, 1200000, 50, 12),
(87, 20, 'Luôn tự tin trong mọi điều kiện. Mẫu giày chạy này có thân trên bằng vải dệt kim với cổ giày có khung định hình đem lại cảm giác ổn định và ôm vừa vặn theo hình dáng bàn chân. Đế ngoài bằng cao su bảo đảm độ bám tốt, bất kể là chạy khi trời mưa hay hay trên đường bụi. Đế Boost mật độ cao chuyển hồi năng lượng vô tận, đồng thời lớp đệm vượt trội đem đến độ ổn định vững chắc', 'PB01', 10, 2100000, 55, 11),
(88, 20, 'Luôn tự tin trong mọi điều kiện. Mẫu giày chạy này có thân trên bằng vải dệt kim với cổ giày có khung định hình đem lại cảm giác ổn định và ôm vừa vặn theo hình dáng bàn chân. Đế ngoài bằng cao su bảo đảm độ bám tốt, bất kể là chạy khi trời mưa hay hay trên đường bụi. Đế Boost mật độ cao chuyển hồi năng lượng vô tận, đồng thời lớp đệm vượt trội đem đến độ ổn định vững chắc', 'PB01', 9, 2100000, 55, 12),
(89, 24, 'Luôn tự tin trong mọi điều kiện. Mẫu giày chạy này có thân trên bằng vải dệt kim với cổ giày có khung định hình đem lại cảm giác ổn định và ôm vừa vặn theo hình dáng bàn chân. Đế ngoài bằng cao su bảo đảm độ bám tốt, bất kể là chạy khi trời mưa hay hay trên đường bụi. Đế Boost mật độ cao chuyển hồi năng lượng vô tận, đồng thời lớp đệm vượt trội đem đến độ ổn định vững chắc', 'PB01', 10, 2100000, 55, 11),
(90, 24, 'Luôn tự tin trong mọi điều kiện. Mẫu giày chạy này có thân trên bằng vải dệt kim với cổ giày có khung định hình đem lại cảm giác ổn định và ôm vừa vặn theo hình dáng bàn chân. Đế ngoài bằng cao su bảo đảm độ bám tốt, bất kể là chạy khi trời mưa hay hay trên đường bụi. Đế Boost mật độ cao chuyển hồi năng lượng vô tận, đồng thời lớp đệm vượt trội đem đến độ ổn định vững chắc', 'PB01', 13, 2100000, 55, 12),
(91, 23, 'Với mẫu giày sơ sinh êm ái này, các em nhỏ sẽ có thể chơi đùa cùng chú Chuột Minnie của Disney mọi lúc mọi nơi. Giày có thân trên bằng vải dệt mềm mại và quai giày bằng băng gai dính mang hình nơ của chú Chuột Minnie. Đế ngoài bằng nhựa EVA siêu nhẹ đem đến sự linh hoạt và lớp đệm êm giúp những đôi chân nhỏ xinh chuyển động.', 'FOR01', 3, 1100000, 56, 11),
(92, 23, 'Với mẫu giày sơ sinh êm ái này, các em nhỏ sẽ có thể chơi đùa cùng chú Chuột Minnie của Disney mọi lúc mọi nơi. Giày có thân trên bằng vải dệt mềm mại và quai giày bằng băng gai dính mang hình nơ của chú Chuột Minnie. Đế ngoài bằng nhựa EVA siêu nhẹ đem đến sự linh hoạt và lớp đệm êm giúp những đôi chân nhỏ xinh chuyển động.', 'FOR01', 3, 1100000, 56, 12);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_hoadon`
--

CREATE TABLE `dbl_hoadon` (
  `id_donhang` int(11) NOT NULL,
  `id_chitiet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `tongtien_dh` float NOT NULL,
  `trangthai_dh` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `sodiennguoinhan` int(11) NOT NULL,
  `diachinguoinhan` varchar(250) NOT NULL,
  `hinhthucthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_hoadon`
--

INSERT INTO `dbl_hoadon` (`id_donhang`, `id_chitiet`, `id_user`, `soluong_sp`, `tongtien_dh`, `trangthai_dh`, `tensp`, `sodiennguoinhan`, `diachinguoinhan`, `hinhthucthanhtoan`) VALUES
(22, 33, 7, 0, 0, 0, '', 2526665, 'asdasdasdsad', 1),
(23, 33, 7, 0, 10500000, 0, 'CONTINENTAL 80 SHOES', 2526665, 'asdasdasdsad', 1),
(24, 33, 7, 0, 10500000, 0, 'CONTINENTAL 80 SHOES', 2526665, 'asdasdasdsad', 1),
(25, 33, 7, 0, 10500000, 0, 'CONTINENTAL 80 SHOES', 2526665, 'asdasdasdsad', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_loaisp`
--

CREATE TABLE `dbl_loaisp` (
  `id_loaisp` int(100) NOT NULL,
  `tenloaisp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_loaisp`
--

INSERT INTO `dbl_loaisp` (`id_loaisp`, `tenloaisp`) VALUES
(22, 'Nam'),
(23, 'Nữ'),
(24, 'Trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_mau`
--

CREATE TABLE `dbl_mau` (
  `id_mau` int(100) NOT NULL,
  `mau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_mau`
--

INSERT INTO `dbl_mau` (`id_mau`, `mau`) VALUES
(20, '#1D1C2C'),
(21, '#9F9CAD'),
(22, '#D64C2C'),
(23, '#CC3C49'),
(24, '#E7E8F2'),
(25, '#5D78A8');

-- --------------------------------------------------------

--
-- Table structure for table `dbl_sanpham`
--

CREATE TABLE `dbl_sanpham` (
  `id_sp` int(100) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `id_loaisp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_sanpham`
--

INSERT INTO `dbl_sanpham` (`id_sp`, `tensp`, `id_loaisp`) VALUES
(41, 'Addias Ftw Solar Glide ', 22),
(42, 'CONTINENTAL 80 SHOES', 22),
(44, 'ENERGYFALCON SHOES', 22),
(45, 'ULTRABOOST', 22),
(46, 'NITE JOGGER SHOES', 23),
(47, 'HEAWIN', 23),
(48, 'Stan Smith', 23),
(49, 'SENSEBOOST GO', 23),
(50, 'RUNFALCON', 24),
(51, 'PULSEBOOST HD', 22),
(53, 'SOLAR HU HUMAN MADE', 23),
(54, 'ALPHABOOST PARLEY', 23),
(55, 'PULSEBOOST HD', 24),
(56, 'FORTARUN X MINNIE MOUSE', 24);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_size`
--

CREATE TABLE `dbl_size` (
  `id_size` int(100) NOT NULL,
  `size` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_size`
--

INSERT INTO `dbl_size` (`id_size`, `size`) VALUES
(1, 35),
(2, 36),
(3, 37),
(4, 38),
(5, 39),
(6, 40),
(7, 41),
(8, 42),
(9, 43),
(10, 44),
(11, 20),
(12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_thanhtoan`
--

CREATE TABLE `dbl_thanhtoan` (
  `id_thanhtoan` int(11) NOT NULL,
  `tennguoinhan` varchar(255) NOT NULL,
  `sdtnguoinhan` int(11) NOT NULL,
  `diachinguoinhan` varchar(255) NOT NULL,
  `hinhthucthanhtoan` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `xacnhan_thanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dbl_user`
--

CREATE TABLE `dbl_user` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gioitinh` int(1) NOT NULL,
  `trangthaiActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbl_user`
--

INSERT INTO `dbl_user` (`id_user`, `hoten`, `sdt`, `email`, `password`, `gioitinh`, `trangthaiActive`) VALUES
(7, 'lequynam', 368475269, 'quynamle123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1),
(8, 'lequynam', 368475269, 'DoAnWebBanGiay-2019@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(9, 'Tran Hoang An', 349282768, 'tranminh534@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(10, 'Tran Hoang An', 349282768, 'tranminh534@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(11, 'ansama', 12321425, 'tranminh534@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0),
(12, 'ansama', 12321425, 'tranminh534@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dbl_vanchuyen`
--

CREATE TABLE `dbl_vanchuyen` (
  `id_vanchuyen` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `trangthai_vanchuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbl_admin`
--
ALTER TABLE `dbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dbl_anh`
--
ALTER TABLE `dbl_anh`
  ADD PRIMARY KEY (`id_anh`),
  ADD KEY `dbl_anh_ibfk_1` (`id_chitiet`);

--
-- Indexes for table `dbl_chitiet_sp`
--
ALTER TABLE `dbl_chitiet_sp`
  ADD PRIMARY KEY (`id_chitiet`),
  ADD KEY `dbl_chitiet_sp_ibfk_1` (`id_size`),
  ADD KEY `dbl_chitiet_sp_ibfk_2` (`id_mau`),
  ADD KEY `dbl_chitiet_sp_ibfk_3` (`id_sp`);

--
-- Indexes for table `dbl_hoadon`
--
ALTER TABLE `dbl_hoadon`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_chitiet` (`id_chitiet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dbl_loaisp`
--
ALTER TABLE `dbl_loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Indexes for table `dbl_mau`
--
ALTER TABLE `dbl_mau`
  ADD PRIMARY KEY (`id_mau`);

--
-- Indexes for table `dbl_sanpham`
--
ALTER TABLE `dbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `dbl_sanpham_ibfk_1` (`id_loaisp`);

--
-- Indexes for table `dbl_size`
--
ALTER TABLE `dbl_size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `dbl_thanhtoan`
--
ALTER TABLE `dbl_thanhtoan`
  ADD PRIMARY KEY (`id_thanhtoan`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `dbl_user`
--
ALTER TABLE `dbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dbl_vanchuyen`
--
ALTER TABLE `dbl_vanchuyen`
  ADD PRIMARY KEY (`id_vanchuyen`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbl_admin`
--
ALTER TABLE `dbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbl_anh`
--
ALTER TABLE `dbl_anh`
  MODIFY `id_anh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `dbl_chitiet_sp`
--
ALTER TABLE `dbl_chitiet_sp`
  MODIFY `id_chitiet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `dbl_hoadon`
--
ALTER TABLE `dbl_hoadon`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dbl_loaisp`
--
ALTER TABLE `dbl_loaisp`
  MODIFY `id_loaisp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `dbl_mau`
--
ALTER TABLE `dbl_mau`
  MODIFY `id_mau` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dbl_sanpham`
--
ALTER TABLE `dbl_sanpham`
  MODIFY `id_sp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `dbl_size`
--
ALTER TABLE `dbl_size`
  MODIFY `id_size` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dbl_thanhtoan`
--
ALTER TABLE `dbl_thanhtoan`
  MODIFY `id_thanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dbl_user`
--
ALTER TABLE `dbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dbl_vanchuyen`
--
ALTER TABLE `dbl_vanchuyen`
  MODIFY `id_vanchuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dbl_chitiet_sp`
--
ALTER TABLE `dbl_chitiet_sp`
  ADD CONSTRAINT `dbl_chitiet_sp_ibfk_1` FOREIGN KEY (`id_size`) REFERENCES `dbl_size` (`id_size`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `dbl_chitiet_sp_ibfk_2` FOREIGN KEY (`id_mau`) REFERENCES `dbl_mau` (`id_mau`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `dbl_chitiet_sp_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `dbl_sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `dbl_hoadon`
--
ALTER TABLE `dbl_hoadon`
  ADD CONSTRAINT `dbl_hoadon_ibfk_1` FOREIGN KEY (`id_chitiet`) REFERENCES `dbl_chitiet_sp` (`id_chitiet`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `dbl_hoadon_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `dbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `dbl_sanpham`
--
ALTER TABLE `dbl_sanpham`
  ADD CONSTRAINT `dbl_sanpham_ibfk_1` FOREIGN KEY (`id_loaisp`) REFERENCES `dbl_loaisp` (`id_loaisp`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `dbl_thanhtoan`
--
ALTER TABLE `dbl_thanhtoan`
  ADD CONSTRAINT `dbl_thanhtoan_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `dbl_hoadon` (`id_donhang`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `dbl_vanchuyen`
--
ALTER TABLE `dbl_vanchuyen`
  ADD CONSTRAINT `dbl_vanchuyen_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `dbl_hoadon` (`id_donhang`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
