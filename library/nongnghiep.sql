-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 09:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nongnghiep`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `name_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(89, '2014_10_12_000000_create_users_table', 1),
(90, '2019_08_19_000000_create_failed_jobs_table', 1),
(91, '2020_12_17_061812_create_categories_table', 1),
(92, '2020_12_17_210424_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(10) UNSIGNED NOT NULL,
  `name_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` date NOT NULL,
  `thumbnail_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_post` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `name_post`, `url_post`, `content_post`, `date_post`, `thumbnail_post`, `enable_post`, `created_at`, `updated_at`) VALUES
(1, 'Nhiệt độ dưới 0 độ C, rừng Y Tý tuyết rơi dày, Sa Pa có mưa', 'nhiet-do-duoi-0-do-c-rung-y-ty-tuyet-roi-day-sapa-co-mua', '<p>Ông Lưu Minh Hải - Giám đốc Đài khí tượng thuỷ văn tỉnh Lào Cai cho biết, không riêng Y Tý mà Sa Pa cũng có tuyết. Tuy nhiên, tuyết chỉ rơi ở khu vực từ đèo Ô Quý Hồ lên tới đỉnh Fansipan. Tuyết rơi hầu khắp ở khu vực này, tuy nhiên mật độ không dày.</p>\n\n<p>\"Tại đèo Ô Quý Hồ tuyết rơi nhẹ hơn khu vực xã Y Tý của huyện Bát Xát, tỉnh Lào Cai\", ông Lưu Minh Hải nhấn mạnh.</p>\n\n<p>Cũng theo ông Hải cho biết, ở trung tâm thị trấn Sa Pa nhiệt độ khoảng -2,1 độ C tuy nhiên chỉ có băng giá. Vì tại trung tâm Sa Pa đang có mưa và mây mù nên không xảy ra hiện tượng tuyết rơi.</p>\n\n<p>Tuyết rơi tạo ra hiện tượng thiên nhiên kỳ thú, tuy nhiên bông tuyết rơi bám vào cây cối và đặc biệt là hoa màu sẽ gây hư hỏng, làm thiệt hại kinh tế của người dân, theo lời ông Hải.</p>\n\n<p>Dự báo đêm và rạng sáng mai, mưa tuyết sẽ xuất hiện mạnh hơn và tại thị trấn Sa Pa cũng như dãy Hoàng Liên Sơn mưa tuyết sẽ lan toả xuống vùng thấp. Khi đó, lòng thị trấn Sa Pa cũng sẽ có tuyết rơi.</p>\n\n', '2021-01-10', 'nhiet-do-duoi-0-do-c-rung-y-ty-tuyet-roi-day-sapa-co-mua-thumbnail.jpg', 1, '2021-01-13 00:20:17', '2021-01-13 00:20:17'),
(2, 'Lào Cai: Sẽ xử lý trường hợp găm hàng, đẩy giá thịt lợn vào dịp Tết', 'lao-cai-se-xu-ly-truong-hop-gam-hang-day-gia-thit-lon-vao-dip-tet', '<p>Ông Đỗ Hồng Quân - Trưởng Phòng NNPT-NT huyện Bảo Thắng (Lào Cai) cho biết, sau khi khống chế dịch tả lợn Châu Phi, huyện bám sát chỉ đạo của tỉnh để khuyến cáo người dân tổ chức tái đàn, tăng đàn, phát triển chăn nuôi theo hướng an toàn sinh học nên kịp thời khôi phục tổng đàn. Tổng đàn lợn trên địa bàn huyện là hơn 150.000 con. Có thể cung ứng ra thị trường 2.050 tấn thịt lợn vào dịp Tết Nguyên đán 2021.</p>\n\n<p>\"Huyện Bảo Thắng chỉ đạo các xã, thị trấn và các cơ quan chuyên môn tuyên truyền, hướng dẫn người chăn nuôi tổ chức tái đàn, vừa đảm bảo yêu cầu phòng, chống dịch, vừa cân đối cung - cầu\", ông Quân nói.</p>\n\n<p>Hợp tác xã chăn nuôi Quý Hiền (huyện Bảo Thắng) - cơ sở chăn nuôi có quy mô lớn nhất tỉnh, do chủ động khoanh vùng, xử lý và dập dịch triệt để nên hợp tác xã không bị thiệt hại do dịch tả lợn Châu Phi. Đặc biệt, hợp tác xã áp dụng phương pháp chăn nuôi an toàn sinh học nên duy trì khoảng 6.000 con lợn thịt cung ứng cho thị trường.</p>\n\n<p>Ông Lê Mạnh Quý - Giám đốc Hợp tác xã Chăn nuôi Quý Hiền cho biết, sản phẩm thịt lợn của hợp tác xã đang không đủ cung ứng cho thị trường trong tỉnh Lào Cai. Từ ngày 15 tháng Chạp, dự kiến nhu cầu thịt lợn tăng khoảng 30 - 40% so với ngày thường, vì vậy giá thịt sẽ tăng. Tuy nhiên, hợp tác xã sẽ duy trì mức giá ổn định để giữ thương hiệu.</p>\n\n<p>Còn tại huyện Văn Bàn, người chăn nuôi áp dụng các biện pháp kỹ thuật về giống, thức ăn chăn nuôi và quy trình chăm sóc, nuôi dưỡng để kịp tái đàn, cung cấp thịt lợn cho thị trường.</p>\n\n', '2021-01-11', 'lao-cai-se-xu-ly-truong-hop-gam-hang-day-gia-thit-lon-vao-dip-tet-thumbnail.jpg', 1, '2021-01-13 00:20:17', '2021-01-13 00:20:17'),
(3, 'Nhân bản vô tính lợn rừng - mũi tên trúng hai đích của Trung Quốc', 'nhan-ban-vo-tinh-lon-rung-mui-ten-trung-hai-dich-cua-trung-quoc', '<p>Cơ sở nhân bản vô tính lợn rừng ở Hồ Bắc với chức năng chọn tạo- nhân giống vừa để bảo vệ nguồn gen lợn rừng bản địa vừa tạo thêm nguồn cung thịt mới.</p>\n\n<p>Theo đó, xa hơn cơ sở nghiên cứu giống tại miền trung Trung Quốc này còn tiến đến mục tiêu phá vỡ thế độc quyền về giống lợn của nước ngoài cũng như tham vọng xoay chuyển cục diện ngành công nghiệp thịt lợn của Trung Quốc ngày một trở nên bớt lệ thuộc.</p>\n', '2021-01-12', 'nhan-ban-vo-tinh-lon-rung-mui-ten-trung-hai-dich-cua-trung-quoc-thumbnail.jpg', 1, '2021-01-13 00:20:17', '2021-01-13 00:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hai', 'nvhai', '$2y$10$pM.Z8blkWHJPUGiVrpCWvOt1VlH5v4LKupaxDjp3pz2K3.lleuKnK', 'nvhai@gmail.com', NULL, '2021-01-13 00:20:17', '2021-01-13 00:20:17'),
(2, 'thu', 'thu', '$2y$10$al5YFuC6S.XKt0lihqzFo.LjCF.oeDPM83hF9hogseCU5jBU8vGFq', 'thu@gmail.com', NULL, '2021-01-13 00:20:17', '2021-01-13 00:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
