-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.byetcluster.com
-- Generation Time: Sep 28, 2022 at 07:03 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31373661_shoplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `name`, `location`) VALUES
(3, 'kaitale alex', 'kaitalealex@gmail.com', '60bea986184ed0f0046dd83298df7ace', 'review-2.png', 'profile_images/review-2.png'),
(4, 'sund@gmail.com', 'sund@gmail.com', 'a16b364a109a0a79b113cb43089135dd', 'c2.jpg', 'profile_images/c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `header`, `description`, `name`, `location`) VALUES
(4, 'Welcome to ShOpLeXUG ', 'Unlocking a unique shopping ðŸ› experience for you and your family.', '5F57F2F4-F4DF-4837-A4D0-A94A7FF82608.jpeg', 'images/5F57F2F4-F4DF-4837-A4D0-A94A7FF82608.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productname`, `price`, `name`, `location`, `username`, `code`) VALUES
(110, ' fggb', 456, 'product-4.jpg', 'products/product-4.jpg', 'kaitale alex', 'product'),
(111, ' fggb', 456, 'product-4.jpg', 'products/product-4.jpg', 'kaitale alex', 'product'),
(122, ' test product', 1000, 'item-1.jpg', 'products/item-1.jpg', '', 'product'),
(125, ' test product', 1000, 'item-1.jpg', 'products/item-1.jpg', '', 'product'),
(131, 'Marble bracelet  ', 15000, 'IMG-20220405-WA0043.jpg', 'products/IMG-20220405-WA0043.jpg', 'kaitale alex', 'Product '),
(132, 'Unisex bracelets    ', 15000, 'IMG-20220405-WA0039.jpg', 'products/IMG-20220405-WA0039.jpg', '', 'Product'),
(133, 'Unisex bracelets    ', 15000, 'IMG-20220405-WA0039.jpg', 'products/IMG-20220405-WA0039.jpg', '', 'Product'),
(138, 'Unisex bracelets ', 15000, 'IMG-20220405-WA0026.jpg', 'products/IMG-20220405-WA0026.jpg', 'Elvis', 'Product'),
(139, 'Marble bracelet  ', 15000, 'IMG-20220405-WA0043.jpg', 'products/IMG-20220405-WA0043.jpg', '', 'Product '),
(140, ' Nike Air Jordan 4', 155000, '426958A8-73A2-4C9C-A331-36FDB84713F9.jpeg', 'products/426958A8-73A2-4C9C-A331-36FDB84713F9.jpeg', 'kaitale alex', 'Deal'),
(144, 'Nike Air Jordan 4', 150000, '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', '', 'Deal'),
(145, 'Nike Air Jordan 4', 150000, '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'Alex', 'Deal'),
(146, ' Nike Air Foamposite Pro Fleece', 179900, '1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', 'products/1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', '', 'Product'),
(147, ' Nike Air Foamposite Pro Fleece', 179900, '1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', 'products/1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', '', 'Product'),
(148, ' Nike Air Foamposite Pro Fleece', 179900, '1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', 'products/1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', '', 'Product'),
(151, 'Nike Air Jordan 4', 150000, '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'test90', 'Deal'),
(155, 'Couple bracelets       ', 15000, 'IMG-20220405-WA0031.jpg', 'products/IMG-20220405-WA0031.jpg', 'test90', 'Product'),
(156, ' Nike Air Jordan 4', 150000, '6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', 'products/6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', 'test90', 'Deal'),
(157, 'Unisex bracelets ', 15000, 'IMG-20220405-WA0026.jpg', 'products/IMG-20220405-WA0026.jpg', 'test90', 'Product'),
(158, ' Nike Air Jordan 4', 150000, '6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', 'products/6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', '', 'Deal'),
(160, 'Unisex bracelets ', 15000, 'IMG-20220405-WA0026.jpg', 'products/IMG-20220405-WA0026.jpg', 'test23', 'Product'),
(161, 'Nike Air Jordan 4', 150000, '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', '', 'Deal'),
(162, 'Nike Air Jordan 4', 150000, '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'Allan', 'Deal'),
(163, 'Marble bracelet  ', 15000, 'IMG-20220405-WA0043.jpg', 'products/IMG-20220405-WA0043.jpg', '', 'Product '),
(165, 'Unisex bracelets    ', 15000, 'IMG-20220405-WA0039.jpg', 'products/IMG-20220405-WA0039.jpg', 'jackie', 'Product');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `detaildescription` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cnumber` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deeal_time`
--

CREATE TABLE `deeal_time` (
  `id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deeal_time`
--

INSERT INTO `deeal_time` (`id`, `start_time`, `url`, `name`, `location`) VALUES
(1, '2022-04-22 01:08:00', 'https://youtu.be/LLthMBAYCdA', 'IMG-20211208-WA0007.jpg', 'images/IMG-20211208-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'admin5@gmail.com'),
(2, 'anya@gmail.com'),
(3, 'anya@gmail.com'),
(4, 'anya@gmail.com'),
(5, 'okmarvins@gmail.com'),
(6, 'okmarvins@gmail.com'),
(7, 'marvinsk@ucushop.com'),
(8, 'marvinsk@ucushop.com'),
(9, 'okmarvins@gmail.com'),
(10, 'okmarvins@gmail.com'),
(11, 'okmarvins@gmail.com'),
(12, 'okmarvins@gmail.com'),
(13, 'test1@gmail.com'),
(14, 'test1@gmail.com'),
(15, 'kaitalealex5@gmail.com'),
(16, 'kaitalealex5@gmail.com'),
(17, 'okmarvins@gmail.cim'),
(18, 'okmarvins@gmail.cim'),
(19, 'kaitalealex5@gmail.com'),
(20, 'kaitalealex5@gmail.com'),
(21, 'oarvin5@gmail.com'),
(22, 'oarvin5@gmail.com'),
(23, 'sundun@gmail.com'),
(24, 'sundun@gmail.com'),
(25, 'marvins.kauta@gmail.com'),
(26, 'kaitalealex5@gmail.com'),
(27, 'kaitalealex5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `aboutme` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productname`, `price`, `country`, `city`, `address`, `street`, `postcode`, `aboutme`, `name`, `location`, `contact`, `quantity`, `username`, `email`) VALUES
(35, ' Nike Air Jordan 4 ', 150000, 'Uganda', 'Kampala', 'Kampala', 'Kampala', 256, 'gfhg', '64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'products/64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 773603206, 3, 'test23', 'test23@gmail.com'),
(36, 'Nike Air Jordan 4', 150000, 'Uganda', 'kampala', 'Hdssn', 'gogonya', 256, '', '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 773603206, 11, 'Allan', 'allan@gmail.com'),
(37, ' Nike Air Jordan 4 ', 150000, 'uganda', 'kampala', 'kampala', 'kampala', 256, 'dcdfdfdd', '64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'products/64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 773603206, 2, 'jackie', 'joyce.maks@gmail.com'),
(38, ' Nike Air Jordan 4 ', 150000, 'uganda', 'kampala', 'kampala', 'kampala', 256, 'dcdfdfdd', '64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'products/64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 773603206, 2, 'jackie', 'joyce.maks@gmail.com'),
(39, ' Nike Air Jordan 4 ', 150000, 'uganda', 'kampala', 'kampala', 'kampala', 256, 'dcdfdfdd', '64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'products/64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 773603206, 2, 'jackie', 'joyce.maks@gmail.com'),
(40, 'Unisex bracelets    ', 15000, 'Uganda', 'kampala', 'kampala', 'kampala', 256, 'mmmmsmsmsms', 'IMG-20220405-WA0039.jpg', 'products/IMG-20220405-WA0039.jpg', 773603206, 2, 'jackie', 'joyce.maks@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `detaildescription` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cnumber` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `description`, `detaildescription`, `width`, `height`, `weight`, `packaging`, `comment`, `cname`, `cemail`, `cnumber`, `discount`, `code`, `name`, `location`, `category`) VALUES
(51, 'Marble bracelet  ', 15000, ' Can we worn by all sex groups  ', '  Can we worn by all sex groups  ', 0, 0, 0, ' Comes in a box well packed with one bracelet of the choosen type ', '', '', '', 0, 1, 'Product ', 'IMG-20220405-WA0043.jpg', 'products/IMG-20220405-WA0043.jpg', 'Accessories '),
(52, 'Unisex bracelets ', 15000, ' Unisex made of marble. Wood ', '  Unisex made of marble. Wood ', 0, 0, 0, ' One bracelet in a box casing ', '', '', '', 0, 1, 'Product', 'IMG-20220405-WA0026.jpg', 'products/IMG-20220405-WA0026.jpg', 'Accessories'),
(53, 'Unisex bracelets  ', 15000, ' Unisex made of marble. Wood  ', '  Unisex made of marble. Wood  ', 0, 0, 0, ' One bracelet in a box casing  ', '', '', '', 0, 1, 'Product', 'IMG-20220405-WA0035.jpg', 'products/IMG-20220405-WA0035.jpg', 'Accessories'),
(54, 'Unisex bracelets    ', 15000, ' Unisex made of marble. Wood    ', '  Unisex made of marble. Wood    ', 0, 0, 0, ' One bracelet in a box casing    ', '', '', '', 0, 1, 'Product', 'IMG-20220405-WA0039.jpg', 'products/IMG-20220405-WA0039.jpg', 'Accessories'),
(55, 'Couple bracelets      ', 15000, ' Unisex made of marble. Wood      ', '  Unisex made of marble. Wood      ', 0, 0, 0, ' One bracelet in a box casing      ', '', '', '', 0, 1, 'Product', 'IMG-20220405-WA0000.jpg', 'products/IMG-20220405-WA0000.jpg', 'Accessories'),
(56, 'Couple bracelets       ', 15000, ' Unisex made of marble. Wood       ', '  Unisex made of marble. Wood       ', 0, 0, 0, ' One bracelet in a box casing       ', '', '', '', 0, 1, 'Product', 'IMG-20220405-WA0031.jpg', 'products/IMG-20220405-WA0031.jpg', 'Accessories'),
(57, 'Nike Air Jordan 4', 150000, 'Nike Air Jordan 4 â€œTour yellowâ€', 'Unisex Nike Air Jordan 4  available from size 38 to size 45', 0, 0, 0, ' Boxed', '', '', '', 0, 5000, 'Deal', '47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'products/47783C11-C233-447B-B601-BFCF14BBABDA.jpeg', 'Footwear '),
(58, ' Nike Air Jordan 4', 150000, ' Nike Air Jordan 4 â€œUniversity Blueâ€', ' Unisex Nike Air Jordan 4 available from size 38 to size 45', 0, 0, 0, ' Boxed', '', '', '', 0, 5000, 'Deal', '6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', 'products/6AD13829-689B-4CB0-9439-AC3F60EECFAB.jpeg', 'Foot wear'),
(59, ' Nike Air Jordan 4 ', 150000, ' Nike Air Jordan 4 â€œWhite Oreoâ€', ' Unisex Nike Air Jordan 4 available from size 38 to size 45 ', 0, 0, 0, ' Boxed ', '', '', '', 0, 5000, 'Deal', '64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'products/64CA6DEE-7BD0-4AFE-BA2F-06DAB5678E6E.jpeg', 'Foot wear'),
(60, ' Nike Air Jordan 4  ', 150000, ' Nike Air Jordan 4 â€œRetro 4 fire Redâ€ ', ' Unisex Nike Air Jordan 4 available from size 38 to size 45  ', 0, 0, 0, ' Boxed  ', '', '', '', 0, 5000, 'Deal', '23F412E4-5C27-4EF0-B815-85AFEC3F0976.jpeg', 'products/23F412E4-5C27-4EF0-B815-85AFEC3F0976.jpeg', 'Foot wear'),
(61, ' Nike Air Foamposite Pro Fleece', 179900, ' Nike Air Foamposite Pro Fleece comes in dark grey Heather wool', ' Nike Air Foamposite Pro Fleece comes in dark grey Heather wool', 0, 0, 0, ' Boxed', '', '', '', 0, 4900, 'Product', '1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', 'products/1145F1FA-7639-4586-9323-A586BDA42A92.jpeg', 'Footwear ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `aboutme` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`, `city`, `address`, `street`, `postcode`, `aboutme`, `contact`, `name`, `location`) VALUES
(22, 'Kalex', 'kalexlex05@gmail.com', '732c810f7e451c4d9b4a56a32b2e3e9d', '', '', '', '', 0, '', 0, 'B1703DB8-A908-4FB7-AC27-AF77DC4B7C6E.jpeg', 'profile_images/B1703DB8-A908-4FB7-AC27-AF77DC4B7C6E.jpeg'),
(23, 'test90', 'test@gmail.com', '1aedb8d9dc4751e229a335e371db8058', 'uganda', 'kampala', 'nsambya', 'gogonya', 256, 'jnxcxmsxlsxlsk', 775078965, '16409837051639408243marvin.jpeg', 'profile_images/16409837051639408243marvin.jpeg'),
(24, 'Alex', 'kaitalealex5@gmail.com', '732c810f7e451c4d9b4a56a32b2e3e9d', 'Uganda', 'Kampala', 'Nsambya-Uganda', 'Nakawa', 0, 'Let\'s get the hustle started.', 759143703, '8D9FA16B-8A3B-4651-84FC-4E379F9D52EF.jpeg', 'profile_images/8D9FA16B-8A3B-4651-84FC-4E379F9D52EF.jpeg'),
(25, 'Elvis', 'mckylerelvis@gmail.com', '7c7522cbbdea796d1e63bae3b3209ca9', '', '', '', '', 0, '', 0, 'IMG_20211212_092135.jpg', 'profile_images/IMG_20211212_092135.jpg'),
(26, 'kauta marvin', 'okmarvins@gmail.com', '422437565e389ffc3016b0d9b8ce3388', 'uganda', 'kampala', 'nsambya gogonya', 'nsambya', 256, 'faithful servant of the lord', 773603206, 'marvin.jpeg', 'profile_images/marvin.jpeg'),
(27, 'test23', 'test23@gmail.com', '92b391570bd0d9b59e9f52b8d6dc691d', '', '', '', '', 0, '', 0, '7c61bbe4a64e823a9c3ee43845ee8133.jpg', 'profile_images/7c61bbe4a64e823a9c3ee43845ee8133.jpg'),
(28, 'Allan', 'allan@gmail.com', '932540d1c3a35c554b58930adff4111e', '', '', '', '', 0, '', 0, 'IMG-20220520-WA0032.jpg', 'profile_images/IMG-20220520-WA0032.jpg'),
(29, 'jackie', 'joyce.maks@gmail.com', '519e7ee1d11c259d7562b2bc9e2c0fc5', '', '', '', '', 0, '', 0, 'WIN_20191211_14_32_26_Pro.jpg', 'profile_images/WIN_20191211_14_32_26_Pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deeal_time`
--
ALTER TABLE `deeal_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deeal_time`
--
ALTER TABLE `deeal_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
