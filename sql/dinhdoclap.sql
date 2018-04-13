-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 02:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinhdoclap`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `khongdau`, `tomtat`, `noidung`, `hinh`, `created_at`, `updated_at`, `iddanhmuc`) VALUES
(1, 'Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập', 'doan-dai-bieu-tham-quan-dinh-doc-lap', 'Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập', 'Chiều ngày 03/4/2018, theo chương trình Hội thảo của Bộ Công an, Đoàn đại biểu các nước tiểu vùng sông Mê Công (Campuchia, Myanma, Thái Lan, Lào, Indonesia, Trung Quốc và Việt Nam) đã đến thăm và tìm hiểu về Di tích Lịch sử Dinh Độc Lập', '1-1.jpg', NULL, NULL, 15),
(1, 'Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập', 'doan-ai-bieu-cac-nuoc-tieu-vung-song-Me-Cong-tham-q', 'Đoàn đại biểu các nước tiểu vùng sông Mê Công tham quan Dinh Độc Lập', 'Chiều ngày 03/4/2018, theo chương trình Hội thảo của Bộ Công an, Đoàn đại biểu các nước tiểu vùng sông Mê Công (Campuchia, Myanma, Thái Lan, Lào, Indonesia, Trung Quốc và Việt Nam) đã đến thăm và tìm hiểu về Di tích Lịch sử Dinh Độc Lập', '1-1.jpg', NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khongdau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idcha` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tieude`, `khongdau`, `idcha`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', 'trang-chu', 0, NULL, NULL),
(2, 'Giới thiệu', 'gioi-thieu', 0, NULL, NULL),
(3, 'Trưng bày', 'trung-bay', 0, NULL, NULL),
(4, 'Cố định', 'co-dinh', 3, NULL, NULL),
(5, 'Chuyên đề', 'chuyên đề', 3, NULL, NULL),
(6, 'Bổ sung', 'bo-sung', 3, NULL, NULL),
(7, 'Tham quan', 'tham-quan', 0, NULL, NULL),
(8, 'Đường đến di tích', 'duong-den-di-tich', 7, NULL, NULL),
(9, 'Giờ mở cửa, giá vé tham quan', 'gia-ve', 7, NULL, NULL),
(10, 'Nội quy tham quan', 'noi-quy', 7, NULL, NULL),
(11, 'Thông báo', 'thong-bao', 0, NULL, NULL),
(12, 'Hình ảnh -Tư liệu', 'hinh-anh-tu-lieu', 0, NULL, NULL),
(13, 'Hỉnh ảnh', 'hinh-anh', 12, NULL, NULL),
(14, 'Tư liệu', 'tu-lieu', 12, NULL, NULL),
(15, 'Tin tức -Sự kiện', 'tin-tuc-su-kien', 0, NULL, NULL),
(16, 'Nhân chứng kể chuyện', 'nhan-chung-ke-chuyen', 15, NULL, NULL),
(17, 'Sổ lưu niệm', 'so-luu-niem', 15, NULL, NULL),
(18, 'Tin tức - Sự kiện', 'tin-tuc-su-kien', 15, NULL, NULL),
(19, 'Sản phẩm', 'san-pham', 0, NULL, NULL),
(20, 'Về chúng tôi', 've-chung-toi', 0, NULL, NULL),
(21, 'Sơ đồ tổ chức', 'so-do-to-chuc', 20, NULL, NULL),
(22, 'Các hoạt động', 'cac-hoat-dong', 20, NULL, NULL),
(23, 'Sưu tầm', 'suu-tam', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idbaiviet` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `displayname`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'myemail@gmail.com', '2018-04-12 19:50:15', NULL),
(0, 'admin', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'example@example.com', '2018-04-13 12:01:41', NULL),
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'example@example.com', '2018-04-13 12:02:39', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
