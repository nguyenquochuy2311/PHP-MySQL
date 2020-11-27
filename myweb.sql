-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 03:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Nam', ''),
(2, 'Nữ', ''),
(3, 'Unisex', ''),
(4, 'Kids', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_title` text COLLATE utf8_unicode_ci NOT NULL,
  `product_img` text COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text COLLATE utf8_unicode_ci NOT NULL,
  `p_cat_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Sneaker', 'Sneaker hay giày sneaker là một tên gọi khác của “giày thể thao” dùng để chỉ các loại giày phục vụ cho vận động thể thao. Tuy nhiên, hiện nay sneaker thường được dùng để chỉ những đôi giày thể thao được mang cho hoạt động hằng ngày.\r\nSneakers luôn là sự lựa chọn hoàn hảo cho những ai yêu thích sự thoải mái, trẻ trung, năng động mà nó mang lại. Có lẽ vì vậy mà có những đôi giày sneaker đã ra đời từ rất lâu nhưng nay vẫn luôn chiếm một vị trí “ưu tiên” trong tủ giày của nhiều bạn trẻ.\r\nSneakers và phong cách streetstyle được tôn sùng như một “cặp đôi hoàn hảo” trong giới fashionista trẻ. Những đôi giày Sneakers mang đến cảm giác bình dân (casual), ít trang trọng (informal) nên hầu như có thể xuất hiện trong các dịp khác nhau như một tổng thể trong bộ trang phục của các bạn trẻ, đặc biệt ở độ tuổi 18 đến dưới 30.\r\nMột số thương hiệu giày sneaker nổi tiếng trên thế giới như: Nike, Adidas, New Balance, Puma'),
(2, 'Dép', 'Nếu như trước đây khi nhắc đến thời trang, người ta sẽ nhắc nhiều đến những đôi sneaker thời thượng hay những đôi giày cao gót sang chảnh mà quên mất một item vô cùng tiện dụng khác – đôi dép. Đi dép là luộm thuộm, quê mùa, nhàm chán ?\r\n\r\nBạn sẽ có cái nhìn khác về việc đưa những đôi dép vào outfit ngày thường của mình sau khi cùng SaigonSneaker.com điểm qua những gợi ý mix and match sau đó! '),
(3, 'Áo thun', ''),
(4, 'Balo / Backpack', ''),
(5, 'Nón', ''),
(6, 'Túi đeo chéo\r\n', ''),
(7, 'Phụ kiện', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`) VALUES
(1, 'slide 1', 'hinh1_slide.jpg'),
(2, 'slide 2', 'hinh2_slide.jpg'),
(3, 'slide 3', 'hinh3_slide.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_desc` (`product_desc`,`product_keywords`) USING HASH,
  ADD KEY `fk01_pc_p` (`p_cat_id`),
  ADD KEY `fk02_c_p` (`cat_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk01_pc_p` FOREIGN KEY (`p_cat_id`) REFERENCES `product_categories` (`p_cat_id`),
  ADD CONSTRAINT `fk02_c_p` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
