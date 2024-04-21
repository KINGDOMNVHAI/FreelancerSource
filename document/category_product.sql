-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id_cat_product` int(10) UNSIGNED NOT NULL,
  `name_cat_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_cat_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_cat_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_parent` int(11) NOT NULL DEFAULT 0,
  `enable_cat_product` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id_cat_product`, `name_cat_product`, `url_cat_product`, `thumbnail_cat_product`, `id_parent`, `enable_cat_product`) VALUES
(1, 'Ngoại ngữ', 'ngoai-ngu', 'ngoai-ngu.jpg', 0, 1),
(2, 'Tiếng Anh', 'tieng-anh', 'ngoai-ngu.jpg', 1, 1),
(3, 'Tiếng Nhật', 'tieng-nhat', 'ngoai-ngu.jpg', 1, 1),
(4, 'Kinh tế', 'kinh-te', 'kinh-te.jpg', 0, 1),
(5, 'Manga', 'manga', 'manga.jpg', 0, 1),
(6, 'Văn phòng phẩm', 'van-phong-pham', 'van-phong-pham.jpg', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id_cat_product`),
  ADD UNIQUE KEY `category_product_url_cat_product_unique` (`url_cat_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id_cat_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
