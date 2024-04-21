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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cat_product` int(11) NOT NULL DEFAULT 0,
  `thumbnail_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_product_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_product_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_product_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_product_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_product` int(11) NOT NULL,
  `unit_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable_product` tinyint(1) NOT NULL DEFAULT 0,
  `popular` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `url_product`, `info_product`, `present_product`, `content_product`, `id_cat_product`, `thumbnail_product`, `img_product_1`, `img_product_2`, `img_product_3`, `img_product_4`, `price_product`, `unit_product`, `enable_product`, `popular`, `created_at`, `updated_at`) VALUES
(1, 'Dạy con làm giàu', 'day-con-lam-giau', 'Dạy con làm giàu', 'Một quyển sách luôn nằm trong top Best Seller của tác giả Robert T Kiyosaki.\r\n', 'Mô tả\r\n', 4, 'day-con-lam-giau-thumbnail.jpg', 'day-con-lam-giau-1.jpg', 'day-con-lam-giau-2.jpg', 'day-con-lam-giau-3.jpg', NULL, 75000, 'Quyển', 1, 1, '2024-04-21 03:26:43', '2024-04-21 03:26:43'),
(2, 'Kinh doanh vì cộng đồng', 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi', 'Kinh doanh vì cộng đồng', '<p></p>\r\n', 'Mô tả\r\n', 4, 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi-thumbnail.jpg', 'kinh-doanh-vi-cong-dong-chia-khoa-cho-xa-hoi-moi-1.jpg', NULL, NULL, NULL, 89000, 'Quyển', 1, 1, '2024-04-21 03:26:44', '2024-04-21 03:26:44'),
(3, 'Khoa học thần kinh dành cho các nhà lãnh đạo', 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao', 'Khoa học thần kinh dành cho các nhà lãnh đạo', '<p></p>\r\n', '\r\n', 4, 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao-thumbnail.jpg', 'khoa-hoc-than-kinh-danh-cho-cac-nha-lanh-dao-1.jpg', NULL, NULL, NULL, 160000, 'Quyển', 1, 1, '2024-04-21 03:26:44', '2024-04-21 03:26:44'),
(4, 'Lãnh đạo bằng lòng biết ơn', 'lanh-dao-bang-long-biet-on', 'Lãnh đạo bằng lòng biết ơn', '<p></p>\r\n', '\r\n', 4, 'lanh-dao-bang-long-biet-on-thumbnail.jpg', 'lanh-dao-bang-long-biet-on-1.jpg', NULL, NULL, NULL, 120000, 'Quyển', 1, 1, '2024-04-21 03:26:44', '2024-04-21 03:26:44'),
(5, 'Nơi làm việc tuyệt vời cho tất cả', 'noi-lam-viec-tuyet-voi-cho-tat-ca', 'Nơi làm việc tuyệt vời cho tất cả', '<p></p>\r\n', '\r\n', 4, 'noi-lam-viec-tuyet-voi-cho-tat-ca-thumbnail.jpg', 'noi-lam-viec-tuyet-voi-cho-tat-ca-1.jpg', NULL, NULL, NULL, 185000, 'Quyển', 1, 1, '2024-04-21 03:26:44', '2024-04-21 03:26:44'),
(6, 'Nhà quản lý cấp trung - Mắt xích sống còn của doanh nghiệp', 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep', 'Nhà quản lý cấp trung', 'Đối với các nhà quản lý cấp trung, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.\r\n', '<p>Nhà quản lý cấp trung đóng vai như một trụ cột vững chắc trong doanh nghiệp, không chỉ duy trì sự ổn định mà còn thúc đẩy sự phát triển bền vững của doanh nghiệp. Nhưng nó chỉ đúng với những nhà quản lý cấp trung xuất sắc, khi đã nắm vững được những kiến thức về quản lý và thực thi.</p>\r\n\r\n<p>Một trong số những thiếu sót của những nhà quản lý cấp trung hiện nay là chưa nhận thức được tầm quan trọng của mình, chưa hiểu đúng vai trò của mình khi đứng giữa quản lý cấp cao và nhân viên của mình.</p>\r\n\r\n<p>Với vai trò là nhà quản lý cấp trung, bạn có nhận ra tầm quan trọng của việc hiểu rõ công việc của các thành viên trong nhóm không?</p>\r\n\r\n<p>Có hiểu rõ yêu cầu đặc biệt của mỗi vị trí trong bộ phận cần đáp ứng? Hiểu rõ thành viên mong muốn gì?</p>\r\n\r\n<p>Tại sao luôn bất mãn khi được giao việc? hay tại sao các nhà quản lý cấp cao chưa hài lòng với bạn?</p>\r\n\r\n<p>Vì sao họ muốn bạn phải phát huy nhiều hơn nữa trong quản lý?...</p>\r\n\r\n<p>Trả lời tất cả các câu hỏi và khúc mắc qua cuốn sách “Nhà quản lý cấp trung - Mắt xích sống còn của doanh nghiệp”. Cuốn sách giúp bạn trở thành nhà quản lý cấp trung xuất sắc, không chỉ giúp cấp cao không còn lo lắng về sự thiếu hiệu quả trong thực hiện công việc mà còn biến những người quản lý cấp trung vươn tới đỉnh cao.</p>\r\n\r\n<p>Đối với những nhà quản lý này, kiến thức và kỹ năng quản lý vững vàng là điều cần thiết, bao gồm các kỹ năng điều hành giao tiếp hiệu quả, tinh thần trách nhiệm và làm việc chuyên nghiệp, công bằng và hiệu quả, cùng với tính thực tế và khả năng ứng dụng cao.</p>\r\n\r\n<p>Để đạt được điều này, các nhà quản lý cấp trung cần tham gia vào quá trình chuyển đổi kế hoạch thành hành động và biến hành động thành kết quả. Cuốn sách đưa ra tất cả mọi thứ mà các nhà quản lý cấp trung cần nắm rõ khi đứng ở vị trí trung gian, cung cấp tất cả những phương pháp, công cụ và tiêu chuẩn toàn diện để hướng dẫn đội ngũ quản lý.</p>\r\n\r\n', 4, 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep-thumbnail.jpg', 'nha-quan-ly-cap-trung-mat-xich-song-con-cua-doanh-nghiep-1.jpg', NULL, NULL, NULL, 190000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(7, 'Tư duy số', 'tu-duy-so', 'Tư duy số', '<p></p>\r\n', 'Mô tả\r\n', 4, 'tu-duy-so-thumbnail.jpg', 'tu-duy-so-1.jpg', 'tu-duy-so-2.jpg', NULL, NULL, 255000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(8, 'Giao tiếp EQ cao', 'giao-tiep-eq-cao', 'Giao tiếp EQ cao', '<p></p>\r\n', 'Mô tả\r\n', 4, 'giao-tiep-eq-cao-thumbnail.jpg', 'giao-tiep-eq-cao-1.jpg', NULL, NULL, NULL, 100000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(9, 'Cao thủ EQ - Trân lý trí, trọng xúc cảm', 'cao-thu-eq', 'Cao thủ EQ', '<p></p>\r\n', 'Mô tả\r\n', 4, 'cao-thu-eq-thumbnail.jpg', 'cao-thu-eq-1.jpg', NULL, NULL, NULL, 40000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(10, 'Inuyasha tập 1', 'inuyasha-tap-1', 'Inuyasha tập 1', '<p></p>\r\n', '\r\n', 5, 'inuyasha-tap-1-thumbnail.jpg', 'inuyasha-tap-1-1.jpg', 'inuyasha-tap-1-2.jpg', 'inuyasha-tap-1-3.jpg', NULL, 75000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(11, 'Inuyasha tập 2', 'inuyasha-tap-2', 'Inuyasha tập 2', '<p></p>\r\n', '\r\n', 5, 'inuyasha-tap-2-thumbnail.jpg', 'inuyasha-tap-2-1.jpg', 'inuyasha-tap-2-2.jpg', 'inuyasha-tap-2-3.jpg', NULL, 75000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(12, 'Giấy Paper One A4 ĐL 70gsm', 'paper-one-a4-dl-70gsm', 'Giấy Paper One A4 ĐL 70gsm', '<p></p>\r\n', '\r\n', 6, 'paper-one-a4-dl-70gsm-thumbnail.jpg', 'paper-one-a4-dl-70gsm-1.jpg', 'paper-one-a4-dl-70gsm-2.jpg', 'paper-one-a4-dl-70gsm-3.jpg', NULL, 75000, 'Quyển', 1, 1, '2024-04-21 03:26:45', '2024-04-21 03:26:45'),
(13, 'Giấy Paper Excel A5 70gsm', 'paper-excel-a5-70gsm', 'Giấy Paper Excel A5 70gsm', '<p></p>\r\n', '\r\n', 6, 'paper-excel-a5-70gsm-thumbnail.jpg', 'paper-excel-a5-70gsm-1.jpg', NULL, NULL, NULL, 75000, 'Quyển', 1, 1, '2024-04-21 03:26:46', '2024-04-21 03:26:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
