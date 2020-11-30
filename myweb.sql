-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:40 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(3, '::1', 5, 'Large'),
(5, '::1', 4, 'Small'),
(6, '::1', 3, 'Small');

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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text COLLATE utf8_unicode_ci NOT NULL,
  `product_img` text COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img`, `product_price`, `product_keywords`, `product_desc`) VALUES
(2, 1, 2, '2020-11-27 13:27:58', 'Nike Air Force 1 Low GS Triple White.\r\n\r\n ', 'g_nike2.jpg', 790000, 'giày nike', '<p>a</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>'),
(3, 1, 1, '2020-11-27 12:52:52', 'Nike Air Jordan 1 X Off-White X Retro High OG Chicago', 'g_jordan3.jpg', 1590000, 'giày nike jordan', '<p><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Helvetica, sans-serif; color: #777777;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit;\">Gi&agrave;y Off White X Air Jordan</span></em><span style=\"color: #777777; font-family: Roboto, Arial, Helvetica, sans-serif;\">&nbsp;l&agrave; một sản phẩm kết hợp xu hướng&nbsp;</span><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Roboto, Arial, Helvetica, sans-serif; color: #777777;\"><span style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; line-height: inherit; font-family: inherit;\">Off White</span></em><span style=\"color: #777777; font-family: Roboto, Arial, Helvetica, sans-serif;\">&nbsp;đang thống trị xu thế đường phố vẫn với tinh thần Gi&agrave;y Air Jordan k&egrave;m với một số chi tiết nổi bật đặc trưng c&ugrave;a Off White. Ch&iacute;nh những điều đ&oacute; đ&atilde; mang đến n&eacute;t mới lạ cho Air Jordan.</span></p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>'),
(4, 1, 1, '2020-11-27 13:23:52', 'Adidas Ultra Boost 4.0 Grey Three', 'g_addidas.jpg', 1050000, 'giày addidas', '<p>&nbsp;</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>'),
(5, 4, 3, '2020-11-27 13:27:00', 'Biggod – Balo (Backpack) Local Brand', 'balo1.jpg', 345000, 'balo nam nữ', '<p><span style=\"color: #777777; font-family: Roboto, Arial, Helvetica, sans-serif;\">Balo nhẹ v&agrave; tho&aacute;ng, chống thấm nước, 1 ngăn lớn, nhiều ngăn phụ, c&oacute; ngăn đựng laptop. Ph&ugrave; hợp nam nữ</span></p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>'),
(6, 2, 3, '2020-11-27 13:32:43', 'Dép Nike Benassi ‘Just Do It’ Slides In White', 'd_nike2.jpg', 490000, 'dép nike', '<p>&nbsp;</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

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
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
