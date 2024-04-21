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
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(10) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `price_discount` int(11) NOT NULL,
  `type_discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `enable_discount` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id_discount`, `id_product`, `price_discount`, `type_discount`, `start_date`, `end_date`, `enable_discount`) VALUES
(1, 1, 0, '%', '2022-07-18', NULL, 0),
(2, 2, 0, '%', '2022-07-18', NULL, 0),
(3, 3, 0, '%', '2022-07-18', NULL, 0),
(4, 4, 0, '%', '2022-07-18', NULL, 0),
(5, 5, 0, '%', '2022-07-18', NULL, 0),
(6, 6, 0, '%', '2022-07-18', NULL, 1),
(7, 7, 0, '%', '2022-07-18', NULL, 0),
(8, 8, 0, '%', '2022-07-18', NULL, 0),
(9, 9, 0, '%', '2022-07-18', NULL, 0),
(10, 10, 0, '%', '2022-07-18', NULL, 0),
(11, 11, 0, '%', '2022-07-18', NULL, 0),
(12, 12, 0, '%', '2022-07-18', NULL, 0),
(13, 13, 0, '%', '2022-07-18', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
