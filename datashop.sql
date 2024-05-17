-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 02:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `count`) VALUES
(1, 1, 24, 5),
(2, 1, 18, 10);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `isnew` text NOT NULL,
  `new` text NOT NULL,
  `date` date NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `isnew`, `new`, `date`, `image1`, `image2`, `image3`, `video`) VALUES
(1, 'Star Official Thailand', 'true', 'StarNight Official TH', '2024-03-15', 'https://images4.alphacoders.com/134/thumb-1920-1343082.jpeg', 'https://as2.ftcdn.net/v2/jpg/02/92/45/55/1000_F_292455515_Q8w69e4VC4pkYayBKCrnm6NIj3ZmQR0g.jpg', 'https://images.alphacoders.com/132/1329621.png', '-tGXdfsW7TE');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `com` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `image` text NOT NULL,
  `count` int(11) NOT NULL,
  `date_pd` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `com`, `description`, `category`, `image`, `count`, `date_pd`, `link`) VALUES
(1, 'Kurumi', 99999, 'ตัว Main', 'Main', 'anime', 'https://rare-gallery.com/mocahbig/5476390-tokisaki-kurumi-date-a-live-anime-girls-heterochromia.jpg', 8, '11-13-42 07-05-2024', 'https://rare-gallery.com/mocahbig/5476390-tokisaki-kurumi-date-a-live-anime-girls-heterochromia.jpg'),
(2, 'Zero Two', 88888, 'Main รอง', 'https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/04/zero-two-feature.jpgฟ', 'anime', 'https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/04/zero-two-feature.jpg', 8, '11-15-33 07-05-2024', 'https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/04/zero-two-feature.jpg'),
(3, 'โยรุกะ', 1111, 'ติด top', 'https://i.ytimg.com/vi/ZoaCmyqRdhA/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gLygyMA8=&rs=AOn4CLDAXu2OTyesYLRxFNQ967s0A3QBYw', 'anime', 'https://i.ytimg.com/vi/ZoaCmyqRdhA/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gLygyMA8=&rs=AOn4CLDAXu2OTyesYLRxFNQ967s0A3QBYw', 1, '11-16-46 07-05-2024', 'https://i.ytimg.com/vi/ZoaCmyqRdhA/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gLygyMA8=&rs=AOn4CLDAXu2OTyesYLRxFNQ967s0A3QBYw'),
(4, 'Nino', 490, 'ซึนๆ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ0BdxhN1MFhsnkgviovA4MP94qRmId4dLszqbKoE08Q&s', 'anime', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ0BdxhN1MFhsnkgviovA4MP94qRmId4dLszqbKoE08Q&s', 1, '11-18-08 07-05-2024', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ0BdxhN1MFhsnkgviovA4MP94qRmId4dLszqbKoE08Q&s'),
(5, 'Asuna', 666, '~w~', 'https://www.gamemonday.com/wp-content/uploads/2019/09/Sword-Art-Online-2892019-1.png', 'anime', 'https://www.gamemonday.com/wp-content/uploads/2019/09/Sword-Art-Online-2892019-1.png', 3, '11-20-16 07-05-2024', 'https://www.gamemonday.com/wp-content/uploads/2019/09/Sword-Art-Online-2892019-1.png'),
(6, 'สุคุนะ', 55555, 'พระเครื่อง', 'https://www.silpa-mag.com/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%81-%E0%B8%AA%E0%B8%B8%E0%B8%84%E0%B8%B8%E0%B8%99%E0%B8%B0.jpg', 'anime', 'https://www.silpa-mag.com/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%81-%E0%B8%AA%E0%B8%B8%E0%B8%84%E0%B8%B8%E0%B8%99%E0%B8%B0.jpg', 555, '11-21-34 07-05-2024', 'https://www.silpa-mag.com/wp-content/uploads/2023/07/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%81-%E0%B8%AA%E0%B8%B8%E0%B8%84%E0%B8%B8%E0%B8%99%E0%B8%B0.jpg'),
(7, 'มูราด', 88, 'ROV', 'ROV มูราด', 'new', 'https://lienquan.garena.vn/files/skin/a3291e54b603a398b410190b615583ee659674b3b3b17.jpg', 690, '10/05/2024 16:50 ', 'https://lienquan.garena.vn/files/skin/a3291e54b603a398b410190b615583ee659674b3b3b17.jpg'),
(9, 'อมมม', 55555, 'สุ่ม', 'https://i.waifu.pics/h15rEN_.jpg\r\n', 'horror', 'https://as2.ftcdn.net/v2/jpg/06/14/79/17/1000_F_614791718_kQyujxh4cBhfNNnLodcZkDbnBzsbrwaK.jpg', 888, '11/05/2024 09:26 ', 'https://i.waifu.pics/h15rEN_.jpg'),
(11, 'แฟนเช่า', 666, 'จากอนิเมะแฟนเช้า', 'https://i.waifu.pics/8m-r1_O.png', 'anime', 'https://i.waifu.pics/8m-r1_O.png', 369, '11/05/2024 09:27 ', 'https://i.waifu.pics/8m-r1_O.png'),
(12, 'งาาาา', 123, ' สนุกมาก เขาทำให้หนูปวดหัวเวอร์5555', 'https://i.waifu.pics/P817hp4.jpg', 'anime', 'https://i.waifu.pics/P817hp4.jpg', 123, '11/05/2024 09:28 ', 'https://i.waifu.pics/P817hp4.jpg'),
(13, 'Yen', 333, 'สวยมากกกก', 'https://i.waifu.pics/V2kTPbJ.jpg', 'anime', 'https://i.waifu.pics/V2kTPbJ.jpg', 34, '11/05/2024 09:29 ', 'https://i.waifu.pics/V2kTPbJ.jpg'),
(14, 'cat', 9999, 'Genshin', 'https://i.waifu.pics/mJkPaVR.png', 'anime', 'https://i.waifu.pics/mJkPaVR.png', 456, '11/05/2024 09:30 ', 'https://i.waifu.pics/mJkPaVR.png'),
(15, 'Enjoy', 321, 'so cute', 'https://i.waifu.pics/i~RQhRD.png', 'anime', 'https://i.waifu.pics/i~RQhRD.png', 66, '11/05/2024 09:31 ', 'https://i.waifu.pics/i~RQhRD.png'),
(16, 'good', 74, 'so good', 'https://i.waifu.pics/nxREZO6.png', 'anime', 'https://i.waifu.pics/nxREZO6.png', 523, '11/05/2024 09:33 ', 'https://i.waifu.pics/nxREZO6.png'),
(17, 'Sexy', 9868, 'สวยมากกกก', 'https://i.waifu.pics/qjEV-At.jpg', 'anime', 'https://i.waifu.pics/qjEV-At.jpg', 1500, '11/05/2024 09:34 ', 'https://i.waifu.pics/qjEV-At.jpg'),
(18, 'พนักงาน', 111, 'หัวม่วง ใส่สูท', 'https://i.waifu.pics/Weau1RP.jpg\r\n', 'anime', 'https://i.waifu.pics/Weau1RP.jpg', 111, '11/05/2024 09:36 ', 'https://i.waifu.pics/Weau1RP.jpg'),
(19, 'นิโนะ', 8877, 'ตัวอวย', 'https://i.waifu.pics/XcpL3nR.jpg', 'anime', 'https://i.waifu.pics/XcpL3nR.jpg', 2222, '11/05/2024 09:37 ', 'https://i.waifu.pics/XcpL3nR.jpg'),
(20, 'นินจา', 63, 'นินนิน', 'https://i.waifu.pics/bzG5LVO.jpg', 'anime', 'https://i.waifu.pics/bzG5LVO.jpg', 65, '11/05/2024 09:37 ', 'https://i.waifu.pics/bzG5LVO.jpg'),
(22, 'มีความสุข', 6666, 'ภาพ gif ', 'https://i.waifu.pics/aw1Qigg.gif', 'anime', 'https://as1.ftcdn.net/v2/jpg/07/12/56/14/1000_F_712561473_iiZXU4aZidxLJqWzYEKe0XJhKYPRw011.jpg', 654, '11/05/2024 09:39 ', 'https://i.waifu.pics/aw1Qigg.gif'),
(23, 'แมวน้อย', 5466, 'แมวววว', 'https://i.waifu.pics/3lGmN2f.jpg', 'anime', 'https://imgix.ranker.com/user_node_img/50101/1002007987/original/mamako-from-do-you-love-your-mom-and-her-two-hit-multi-target-attacks-photo-u1?auto=format&q=60&fit=crop&fm=pjpg&dpr=2&w=375', 2222, '11/05/2024 09:41 ', 'https://i.waifu.pics/3lGmN2f.jpg'),
(24, 'nsfw', 9999, 'xxx', 'https://i.waifu.pics/10Ufb7M.png', 'moive', 'https://as2.ftcdn.net/v2/jpg/06/20/41/69/1000_F_620416966_BasuIE5Xay3NVXzF4cPzJIVqNwORNihm.jpg', 10000, '11/05/2024 09:43 ', 'https://i.waifu.pics/10Ufb7M.png'),
(26, 'TEST', 123, 'TEST01', 'TEST', 'new', 'https://img.lazcdn.com/g/p/e9738238e8c3d480dbb05f377b3516dc.jpg_720x720q80.jpg', 444, '11/05/2024 17:05 ', 'min=\"0\" max=\"5\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL DEFAULT 'user',
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `firstname`, `lastname`, `email`, `phone`, `uid`) VALUES
(1, 'MINIOOMTH', '202cb962ac59075b964b07152d234b70', 'admin', 'OOM', 'Yen', 'linkonline144@gmail.com', 0, 1234567890),
(2, 'TTT', '202cb962ac59075b964b07152d234b70', 'user', '', '', '123', 0, 0),
(3, 'OOM', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '', '', 'minioomth123@gmail.com', 0, 0),
(4, 'MINIOOMTH', '827ccb0eea8a706c4c34a16891f84e7b', 'user', '', '', 'minioomth123@gmail.com', 0, 0),
(5, 'OOMTHAA', '827ccb0eea8a706c4c34a16891f84e7b', 'user', '', '', 'dd@gmail.com', 0, 0),
(6, 'GGG', '310dcbbf4cce62f762a2aaa148d556bd', 'user', '', '', 'GGG@gmail.com', 0, 0),
(7, 'RRR', 'bcbe3365e6ac95ea2c0343a2395834dd', 'user', '', '', 'rrr@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
